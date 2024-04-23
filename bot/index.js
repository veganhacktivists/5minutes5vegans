#!/usr/bin/env node

import { Rettiwt } from 'rettiwt-api';
import 'dotenv/config';
import axios from 'axios';

const users = [
    { lang: 'en', id: '1781249168641576961', lastSentTweetId: null },
    { lang: 'fr', id: '1781252596528791552', lastSentTweetId: null },
    { lang: 'es', id: '1781255939871342593', lastSentTweetId: null },
    { lang: 'de', id: '1169896309144207360', lastSentTweetId: null },
];

const pollingIntervalMs = 2 * 60 * 1000;

let rettiwt = await login();

while (true) {
    logInfo('Fetching timelines...');

    try {
        for (const user of users) {
            await new Promise((resolve) => setTimeout(resolve, pollingIntervalMs));

            logInfo(`Fetching ${user.lang.toUpperCase()} timeline...`);

            const tweets = await fetchUserTimelineUntil(user.id, user.lastSentTweetId);

            if (tweets.length === 0) {
                continue;
            }

            try {
                logInfo(`Sending ${tweets.length} new tweets...`);

                await axios.post(`${process.env.APP_URL}/tweets`, { lang: user.lang, tweets });

                logInfo('Sent!');

                user.lastSentTweetId = tweets[0].id;
            } catch (error) {
                logError(`Error while sending new tweets: ${error.message}`);
            }
        }
    } catch (error) {
        logError(`Error while retrieving timelines: ${error.message}`);

        if (error.constructor.name === 'RettiwtError' && error.code === 32) {
            rettiwt = await login();
        }
    }
}

async function login() {
    logInfo('Logging in...');

    const apiKey = await new Rettiwt().auth.login(
        process.env.BOT_EMAIL,
        process.env.BOT_USERNAME,
        process.env.BOT_PASSWORD,
    );

    logInfo('Logged in!');

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
            date: tweet.retweetedTweet.createdAt,
            text: tweet.retweetedTweet.fullText,
            fromUserName: tweet.retweetedTweet.tweetBy.fullName,
            fromFullName: tweet.retweetedTweet.tweetBy.fullName,
            fromProfileImage: tweet.retweetedTweet.tweetBy.profileImage,
            viewCount: tweet.retweetedTweet.viewCount,
            likeCount: tweet.retweetedTweet.likeCount,
            replyCount: tweet.retweetedTweet.replyCount,
            retweetCount: tweet.retweetedTweet.retweetCount,
            quoteCount: tweet.retweetedTweet.quoteCount,
            media: (tweet.retweetedTweet.media ?? []).map(media => ({ ...media })),
        });
    }

    return tweets;
}

function logInfo(...args) {
    console.info(new Date().toISOString(), ...args);
}

function logError(...args) {
    console.error(new Date().toISOString(), ...args);
}
