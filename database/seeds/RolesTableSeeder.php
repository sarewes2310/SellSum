<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataku = array(
            0 => 'Admin',
            1 => 'pemilik_toko',
            2 => 'pegawai_toko',
        );
        foreach($dataku as $value){
            DB::table('roles')->insert([
                'nama' => $value
                
            ]);        
        }
        //
    }
}
