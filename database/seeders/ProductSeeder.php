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
            // 'sale_price'       => 300,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);

        $product = \App\models\Product::create([
            'name'             => "Chino Bottoms",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/bottoms-1-min.jpg',
            'price'            => 200,
            'sale_price'       => 150,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);

        $product = \App\models\Product::create([
            'name'             => "Brown Shoe",
            'description'      => 'xxxxxxxxxxxxx',
            'image_name'       => 'assets/website/images/products/shoe-1-min.jpg',
            'price'            => 350,
            // 'sale_price'       => 300,
            // 'clothing_type'    => '2',
            'product_category' => 'men',
            'is_accessory'     => 'no',
        ]);
    }

}
