<?php

use App\Verbiage;
use Illuminate\Database\Seeder;

class VerbiagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\Verbiage::class, 200)->create();
    }
}
