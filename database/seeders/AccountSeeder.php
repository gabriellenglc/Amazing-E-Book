<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'role_id' => 1,
            'gender_id' => 1,
            'first_name' => 'Customer',
            'last_name' => 'Tercinta',
            'email' => 'customer@customer.com',
            'password' => Hash::make('customer'),
            'display_picture_link' => 'customer.png'
        ]);
 
        DB::table('users')->insert([
            'role_id' => 2,
            'gender_id' => 2,
            'first_name' => 'Admin',
            'middle_name' => 'Keren',
            'last_name' => 'Banget',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'display_picture_link' => 'admin.png'
        ]);
    }
}
