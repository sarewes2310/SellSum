<?php

use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
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
            $harga_seb = $faker->numberBetween(20000,1000000);
            DB::table('barang')->insert([
                'id_toko' => $faker->numberBetween(153,303),
                'kode' => $faker->ean13(),
                'nama' => Str::random(10),
                'qty' => $faker->numberBetween(0,100),
                'harga_seb' => $harga_seb,
                'harga_ses' => $harga_seb + $faker->numberBetween(20000,100000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
