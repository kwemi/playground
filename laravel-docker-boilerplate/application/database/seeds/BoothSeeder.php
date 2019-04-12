<?php

use App\Booth;
use Illuminate\Database\Seeder;

class BoothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Booth::class, 3)->create();
    }
}
