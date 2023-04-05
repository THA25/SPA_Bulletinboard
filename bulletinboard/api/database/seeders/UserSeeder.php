<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
            'profile' => 'admin.jpg',
            'type' => config('constant.USER.TYPE.ADMIN'),
            'phone'=> '09741852963',
            'address' => 'YGN',
            'dob' => date('Y-m-d', strtotime('2000-01-01')),
            'create_user_id' => 1,
            'update_user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'john@mail.com',
            'password' => Hash::make('john123'),
            'profile' => 'john.jpg',
            'type' => config('constant.USER.TYPE.ADMIN'),
            'phone'=> '09779977311',
            'address' => 'YGN',
            'dob' => date('Y-m-d', strtotime('1999-01-01')),
            'create_user_id' => rand(1, 5),
            'update_user_id' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Laty',
            'email' => 'laty@mail.com',
            'password' => Hash::make('laty123'),
            'profile' => 'laty.jpg',
            'type' => config('constant.USER.TYPE.ADMIN'),
            'phone'=> '09995511227',
            'address' => 'MDY',
            'dob' => date('Y-m-d', strtotime('1998-01-01')),
            'create_user_id' => rand(1, 5),
            'update_user_id' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Bruce',
            'email' => 'bruce@mail.com',
            'password' => Hash::make('bruce123'),
            'profile' => 'bruce.jpg',
            'type' => config('constant.USER.TYPE.USER'),
            'phone'=> '09741852963',
            'address' => 'NY',
            'dob' => date('Y-m-d', strtotime('1997-01-01')),
            'create_user_id' => rand(1, 5),
            'update_user_id' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Mac',
            'email' => 'mac@mail.com',
            'password' => Hash::make('mac123'),
            'profile' => 'mac.jpg',
            'type' => config('constant.USER.TYPE.USER'),
            'phone'=> '09557799113',
            'address' => 'YGN',
            'dob' => date('Y-m-d', strtotime('1996-01-01')),
            'create_user_id' => rand(1, 5),
            'update_user_id' => rand(1, 5),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
