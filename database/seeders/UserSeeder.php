<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(25)->create();

        $user = User::create([ //ID = 1 (admin)
            'name'      => "Nada",
            'username'  => 'Nada Ahmed',
            'email'     => 'admin@gmail.com',
            'password'  => '$2y$10$2Z8CF/lDpvDYYDIP28j7he3vHlKpFExarjbU04U7In8bjem9KlKdi', // password (is encrypted): 123456789
            'gender'    => 'female',
            'user_type' => 'admin',
        ]);

        $user = User::create([ //ID = 2 (moderator)
            'name'      => "User_moderator",
            'username'  => 'ModeratorDev',
            'email'     => 'moderator@gmail.com',
            'password'  => '$2y$10$2Z8CF/lDpvDYYDIP28j7he3vHlKpFExarjbU04U7In8bjem9KlKdi', // password (is encrypted): 123456789
            'gender'    => 'female',
            'user_type' => 'moderator',
        ]);

        $user = User::create([ //ID = 3 (customer)
            'name'      => "Nada",
            'username'  => 'Nada_Ahmed',
            'email'     => 'customer@gmail.com',
            'password'  => '$2y$10$2Z8CF/lDpvDYYDIP28j7he3vHlKpFExarjbU04U7In8bjem9KlKdi', // password (is encrypted): 123456789
            'gender'    => 'female',
            'user_type' => 'customer',
        ]);

        $user = User::create([ //ID = 4 (supplier)
            'name'      => "Raymond",
            'username'  => 'Raymond',
            'email'     => 'supplier@gmail.com',
            'password'  => '$2y$10$2Z8CF/lDpvDYYDIP28j7he3vHlKpFExarjbU04U7In8bjem9KlKdi', // password (is encrypted): 123456789
            'user_type' => 'supplier',
        ]);

    }
}
