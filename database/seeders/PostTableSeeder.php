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
            'name' => 'RAM KingSton DDR4 8gb',
            'price' => 555000,
            'image_link' => '/upload/images/ram/kingston.jpg',
            'description' => 'RAM Laptop SODIMM',
            'category_id' => 1,
            'status' => 'public'
        ]);
        DB::table('products')->insert([
            'name' => 'RAM CORSAIR DDR4 2x8gb',
            'price' => 150000000,
            'image_link' => '/upload/images/ram/kingston.jpg',
            'description' => 'RAM Laptop SODIMM',
            'category_id' => 1,
            'status' => 'public'
        ]);
        DB::table('products')->insert([
            'name' => 'RAM KingSton DDR4 2x8gb',
            'price' => 110000000,
            'image_link' => '/upload/images/ram/kingston.jpg',
            'description' => 'RAM Laptop SODIMM',
            'category_id' => 1,
            'status' => 'public'
        ]);

        DB::table('products')->insert([
            'name' => 'SEAGATE HARDISK External 500gb',
            'price' => 520000,
            'image_link' => '/upload/images/hdd/seagate.jpg',
            'description' => 'HARDISK EXTERNAL MERK SEAGATE',
            'category_id' => 2,
            'status' => 'public'
        ]);
        DB::table('products')->insert([
            'name' => 'TOSHIBA Hardisk PC 1TB',
            'price' => 630000,
            'image_link' => '/upload/images/hdd/toshiba.jpg',
            'description' => 'HARDISK 3.5inc MERK TOSHIBA',
            'category_id' => 2,
            'status' => 'public'
        ]);

        DB::table('products')->insert([
            'name' => 'WD Blue™ SATA SSD M.2 2280 250GB',
            'price' => 659000,
            'image_link' => '/upload/images/ssd/WD.jpg',
            'description' => 'SSD M.2 merk Western Digital BLUE ',
            'category_id' => 3,
            'status' => 'public'
        ]);
        DB::table('products')->insert([
            'name' => 'Team MS30 SSD M2.2280 SATA 512GB',
            'price' => 835000,
            'image_link' => '/upload/images/ssd/Team.jpg',
            'description' => 'SSD M.2 merk Team',
            'category_id' => 3,
            'status' => 'public'
        ]);
    }
}
