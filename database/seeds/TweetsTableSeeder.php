<?php

use App\Models\Tweet;
use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    public function run(): void
    {
        Tweet::factory(200)->create();
    }
}
