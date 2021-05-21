<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'RAM'
        ]);

        DB::table('categories')->insert([
            'name' => 'HARDISK'
        ]);

        DB::table('categories')->insert([
            'name' => 'SSD'
        ]);
    }
}
