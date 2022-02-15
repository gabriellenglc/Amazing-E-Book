<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order')->insert([
            [
                'account_id' => 2,
                'ebook_id' => 1,
                'order_date' => date("y-m-d")
            ],
            [
                'account_id' => 1,
                'ebook_id' => 2,
                'order_date' => date("y-m-d")
            ],
            [
                'account_id' => 1,
                'ebook_id' => 3,
                'order_date' => date("y-m-d")
            ],
            [
                'account_id' => 2,
                'ebook_id' => 4,
                'order_date' => date("y-m-d")
            ]
        ]);
    }
}
