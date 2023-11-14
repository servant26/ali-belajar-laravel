<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            [
                'category_name' => 'Sports',
            ],
            [
                'category_name' => 'Daily',
            ],
            [
                'category_name' => 'Accessories',
            ]
            // Tambahkan data pengguna lainnya di sini
        ]);
    }
    
}
