<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product; //model
use Illuminate\Support\Facades\DB; //Db
use Illuminate\Support\Str; //Str kütüphanesi
use Illuminate\Support\Arr; //Arr kütüphanesi
use Faker\Factory as Faker;// Faker kütüphanesi

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for ($i=0; $i <6; $i++){
        $product=$faker->sentence(1);
        DB::table('products')->insert([
          'product_category_id'=>mt_rand(1, 7),
          'product_name'=>$product,
          'product_slug'=>Str::slug($product),
          'product_description'=>$faker->paragraph(2),
          'product_price'=>mt_rand(150, 5000),
          'product_stok'=>mt_rand(10,100),
          'product_showcase'=>mt_rand(0, 1),
          'product_color'=>$faker->colorName(),
          'product_size'=>mt_rand(29, 50),
          'product_brand'=>$faker->sentence(1),
          'created_at'=>now(),
          'updated_at'=>now(),
        ]);
      }
    }
}
