<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(StoreSeeder::class);
        //$this->call(FloorSeeder::class);
        //$this->call(UniverseSeeder::class);
        //$this->call(BoothSeeder::class);
        //$this->call(BoothLevelSeeder::class);
        //$this->call(ProductSeeder::class);
        //$this->call(ConfigurationSeeder::class);
        //$this->call(RatingSeeder::class);
        //$this->call(BasketSeeder::class);
        $this->call(BasketProductSeeder::class);
    }
}
