<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            VerbiagesTableSeeder::class,
            TweetsTableSeeder::class,
        ]);
    }
}
