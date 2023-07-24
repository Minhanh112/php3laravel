<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'maSanpham' => '123a',
            'tenSanpham' => 'IphonX',
            'motaSanpham' => 'sản xuất',
            'thuongHieu' => 'Apple',
            'Gia' => '20000'
        ]);
    }
}
