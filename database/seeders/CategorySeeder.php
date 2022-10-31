<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::create([
            'name'              => "formal",
            'description'       =>'xxxxxxxxxxxx',
            'create_user_id'    => null,
        ]);

        $category = Category::create([ //ID = 2
            'name'             => "Casual",
            'description'      => 'xxxxxxxxxxxx',
            'create_user_id'   => null,
        ]);

        $category = Category::create([ //ID = 3
            'name'             => "Sports Wear",
            'description'      => 'xxxxxxxxxxxx',
            'create_user_id'   => null,
        ]);
        
    }
}
