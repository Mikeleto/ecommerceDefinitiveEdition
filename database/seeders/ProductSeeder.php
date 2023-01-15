<?php

namespace Database\Seeders;

use App\Models\Product;
use Database\Factories\ImageFactory;
use Faker\Provider\Image;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(250)->create()->each(function(Product $product){
           \App\Models\Image::factory(4)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);
        });
    }
}
