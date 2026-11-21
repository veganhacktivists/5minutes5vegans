<?php

use App\Models\Tweet;
use Illuminate\Database\Seeder;

class TweetsTableSeeder extends Seeder
{
    public function run(): void
    {
        Tweet::factory(160)->create();
        Tweet::factory(40)->bluesky()->create();
    }
}
