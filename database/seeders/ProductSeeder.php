<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = \App\models\Product::create([
            'name'             => "Dark Jacket",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/jacket-1-min.jpg',
            'price'            => 340,
            'sale_price'       => 0.10,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);

        $product = \App\models\Product::create([
            'name'             => "Chino Bottoms",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/bottoms-1-min.jpg',
            'price'            => 200,
            'sale_price'       => 0.12,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);

        $product = \App\models\Product::create([
            'name'             => "Brown Shoe",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/shoe-1-min.jpg',
            'price'            => 350,
            // 'sale_price'       => 0.12,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);

        $product = \App\models\Product::create([
            'name'             => "Double Knit Sweater",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/sweater-2-min.jpg',
            'price'            => 250,
            // 'sale_price'       => 0.10,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);

        $product = \App\models\Product::create([
            'name'             => "The Murray",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/watch-1-min.jpg',
            'price'            => 550,
            'sale_price'       => 0.15,
            // 'clothing_type'    => '2',

            'is_accessory'     => 'yes',
        ]);

        $product = \App\models\Product::create([
            'name'             => "The Modern Sock",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/sock-1-min.jpg',
            'price'            => 75,
            // 'sale_price'       => 0.15,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);
    }

}
