<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
//use Faker\Generator as Faker;

class TokoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
        for($i = 0; $i <= 150;$i++){
            DB::table('toko')->insert([
                'id_users' => 1,
                'nama' => Str::random(10),
                'alamat' => $faker->address(),
                'notelp' => $faker->phoneNumber(),
                'website' => $faker->url(),
                'deskripsi' => $faker->text(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
