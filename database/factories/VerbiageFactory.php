<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Verbiage;
use Illuminate\Database\Eloquent\Factories\Factory;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

class VerbiageFactory extends Factory
{
    protected $model = Verbiage::class;

    public function definition()
    {
        return [
            'title' => ucfirst($this->faker->word),
            'user_id' => User::inRandomOrder()->first()->id,
            'icon' => 'fas fa-leaf',
            'body' => $this->faker->paragraph,
        ];
    }
}
