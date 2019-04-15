<?php

use App\BasketProduct;
use Illuminate\Database\Seeder;

class BasketProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(BasketProduct::class, 50)->create();
    }
}
