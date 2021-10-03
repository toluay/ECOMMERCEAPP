<?php

namespace Database\Seeders;

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $Product = Product::class;
        $Product::factory(10)->create();
    }
}
