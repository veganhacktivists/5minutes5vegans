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
            // The API only accepts X's own hosts, so sample posts use them too
            'media'              => array_map(fn () => $this->faker->randomElement([
                ['type' => 'photo', 'url' => 'https://pbs.twimg.com/media/'.$this->faker->regexify('[A-Za-z0-9]{15}').'.jpg'],
                ['type' => 'video', 'url' => 'https://video.twimg.com/ext_tw_video/'.$this->faker->regexify('\d{19}').'/vid.mp4'],
            ]), array_fill(0, $this->faker->numberBetween(0, 4), [])),
            'from_user_name'     => $this->faker->regexify('[a-z]{5,12}'),
            'from_full_name'     => $this->faker->name,
            'from_profile_image' => 'https://pbs.twimg.com/profile_images/'.$this->faker->regexify('\d{19}').'/avatar_normal.jpg',
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
