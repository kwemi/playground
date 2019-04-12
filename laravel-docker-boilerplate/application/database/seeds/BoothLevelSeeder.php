<?php

use App\BoothLevel;
use Illuminate\Database\Seeder;

class BoothLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BoothLevel::class, 3)->create();
    }
}
