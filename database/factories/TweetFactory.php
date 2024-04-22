<?php

namespace Database\Factories;

use App\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    protected $model = Tweet::class;

    public function definition(): array
    {
        return [
            'id'                 => $this->faker->regexify('\d{19}'),
            'lang'               => $this->faker->randomElement(array_keys(config('laravellocalization.supportedLocales'))),
            'date'               => $this->faker->dateTimeThisMonth(),
            'text'               => $this->faker->sentence,
            'media'              => array_map(fn () => [
                'type' => $this->faker->randomElement(['photo', 'video', 'animated_gif']),
                'url'  => $this->faker->imageUrl(),
            ], array_fill(0, $this->faker->numberBetween(0, 4), [])),
            'from_user_name'     => $this->faker->userName,
            'from_full_name'     => $this->faker->name,
            'from_profile_image' => $this->faker->imageUrl(),
            'view_count'         => $this->faker->numberBetween(0, 1000),
            'like_count'         => $this->faker->numberBetween(0, 100),
            'reply_count'        => $this->faker->numberBetween(0, 10),
            'retweet_count'      => $this->faker->numberBetween(0, 10),
            'quote_count'        => $this->faker->numberBetween(0, 5),
        ];
    }

    public function configure(): static
    {
        return $this->afterMaking(function (Tweet $tweet) {
            if ($tweet->media_type !== null) {
                $tweet->media_url = $this->faker->imageUrl();
            }
        });
    }
}
