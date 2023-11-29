<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menggunakan loop untuk membuat 100 data dummy
        for ($i = 0; $i < 25; $i++) {
            $productName = "Product " . ($i + 1);
            $categoryId = rand(1, 3); // Memilih secara acak category_id antara 1, 2, atau 3
            $description = "Description for Product " . ($i + 1);
            $price = rand(100000, 1000000); // Harga di antara 10 hingga 1000 (misalnya)
            $stock = rand(1000, 10000); // Stok di antara 0 hingga 100 (misalnya)

            // Memasukkan data ke dalam tabel 'products'
            DB::table('products')->insert([
                'product_name' => $productName,
                'category_id' => $categoryId,
                'description' => $description,
                'price' => $price,
                'stock' => $stock,
            ]);
        }
    }
}
