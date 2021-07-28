<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Users; //model
use Illuminate\Support\Facades\DB; //Db
use Illuminate\Support\Str; //Str kütüphanesi
use Illuminate\Support\Arr; //Arr kütüphanesi
use Faker\Factory as Faker;// Faker kütüphanesi

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
        for ($i=0; $i <4; $i++){
          $users=$faker->sentence(1);
          DB::table('users')->insert([
            'user_name'=>$users,
            'user_email'=>$faker->safeEmail(),
            'user_password'=>$faker->password(),
            'user_status'=>mt_rand(0, 1),
            'created_at'=>now(),
            'updated_at'=>now(),
          ]);
        }
    }
}
