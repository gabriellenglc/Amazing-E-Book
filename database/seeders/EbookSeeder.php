<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ebook')->insert([
            [
                'title' => 'Harry Potter and the Philosopher Stone',
                'author' => 'Raditya Dika',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delectus temporibus amet enim maiores, molestias perferendis aliquam blanditiis quidem odit'
            ],
            [
                'title' => 'Dilan 1990',
                'author' => 'Pidi Baiq',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delectus temporibus amet enim maiores, molestias perferendis aliquam blanditiis'
            ],
            [
                'title' => 'Marmut Merah Jambu',
                'author' => 'Raditya Dika',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delectus temporibus amet enim maiores, molestias perferendis aliquam blanditiis quidem'
            ],
            [
                'title' => 'Filosofi Kopi',
                'author' => 'Dewi Lestari',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis delectus temporibus amet enim maiores'
            ]
        ]);
    }
}
