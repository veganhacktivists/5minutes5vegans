<?php

use App\Models\Verbiage;
use Illuminate\Database\Seeder;

class VerbiagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Verbiage::factory(200)->create();
    }
}
