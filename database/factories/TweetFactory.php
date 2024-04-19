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
            'id'   => $this->faker->regexify('\d{19}'),
            'lang' => $this->faker->randomElement(array_keys(config('laravellocalization.supportedLocales'))),
            'from' => $this->faker->name,
            'text' => $this->faker->sentence,
        ];
    }
}
