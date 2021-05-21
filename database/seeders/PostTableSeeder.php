<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'RAM KingSton DDR4',
            'price' => 555000,
            'image_link' => '/upload/images/kingston.jpg',
            'description' => 'RAM Laptop SODIMM',
            'category_id' => 1,
            'status' => 'public'
        ]);
    }
}
