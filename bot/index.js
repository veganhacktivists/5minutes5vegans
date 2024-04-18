#!/usr/bin/env node

import { Rettiwt } from 'rettiwt-api';
import 'dotenv/config';
import 'axios';

const users = [
    { username: '5m5v_fr', id: '1169895168259964933', lastSentTweetId: null },
    { username: '5m5v_de', id: '1169896309144207360', lastSentTweetId: null },
];

const pollingIntervalMs = 10 * 1000;//2 * 60 * 1000;

let rettiwt = await login();

while (true) {
    console.log('Fetching timelines...');

    try {
        for (const user of users) {
            await new Promise((resolve) => setTimeout(resolve, pollingIntervalMs));

            console.log(`Fetching timeline of ${user.username}...`);

            const newTweets = await fetchUserTimelineUntil(user.id, user.lastSentTweetId);

            if (newTweets.length === 0) {
                continue;
            }

            try {
                console.log(`Sending ${user.username}'s ${newTweets.length} new tweets...`);

                await axios.post(`${process.env.APP_URL}/tweets`, { user, newTweets });

                console.log('Sent!');

                user.lastSentTweetId = newTweets[0].id;
            } catch (error) {
                console.error(`Error while sending ${user}'s new tweets: ${error.message}`);
            }
        }
    } catch (error) {
        console.error(`Error while retrieving timelines: ${error.message}`);

        if (error.constructor.name === 'RettiwtError' && error.code === 32) {
            rettiwt = await login();
        }
    }
}

async function login() {
    console.log('Logging in...');

    const apiKey = await new Rettiwt().auth.login(
        process.env.BOT_EMAIL,
        process.env.BOT_USERNAME,
        process.env.BOT_PASSWORD,
    );

    console.log('Logged in!');

    return new Rettiwt({ apiKey });
}

async function fetchUserTimelineUntil(userId, untilTweetId) {
    const timeline = await rettiwt.user.timeline(userId);

    const tweets = [];

    for (const tweet of timeline.list) {
        if (!tweet.retweetedTweet) {
            continue;
        }

        if (tweet.retweetedTweet.id === untilTweetId) {
            break;
        }

        tweets.push({
            id: tweet.retweetedTweet.id,
            text: tweet.retweetedTweet.fullText,
            from: tweet.retweetedTweet.tweetBy.fullName,
        });
    }

    return tweets;
}

