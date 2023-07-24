<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer')->insert([
            //cú pháp : 'tên trường'=>'giá trị',
            'name' => 'Hoàng  Anh',
            'email' => 'anhhmph280fpt.edu.vn',
            'phone' => '123457890',
            'date' => '2004/04/1',
            'address' => 'Chương Mỹ',
            'gender' => 1
            //tạo 3 bảng mới bằng migrations
            //trong bảng tạo 5 dữ liệu mẫu
        ]);
    }
}
