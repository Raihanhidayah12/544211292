<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Produk')->insert(array(
            ['nama_produk'=>'sabun lipeboy','harga_jual'=> '30000', 'harga_beli'=> '30000'],
            ['nama_produk'=>'sabun lux','harga_jual'=> '900000', 'harga_beli'=> '30000'],
            ['nama_produk'=>'sabun cap tangan','harga_jual'=>'1000000', 'harga_beli'=> '30000'],
            ['nama_produk'=>'sabun mama lemon','harga_jual'=>'30000', 'harga_beli'=> '30000']
        ));
    }
}
