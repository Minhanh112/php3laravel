<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class testsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //viết những câu lệnh tạo dữ liệu mẫu vào run(ở đây)
        // cú pháp 1: DB::table('tên bảng')->insert([..])
        DB::table('tests')->insert(
            [
                //cú pháp : 'tên trường'=>'giá trị',
                'name' => 'trần',
                'email' => 'anhhmph28087@fpt.edu.vn',
                'phone' => '1234567890',
                'date' => '2004/04/11',
                'address' => 'Chương Mỹ',
                'gender' => 1,
                //tạo 3 bảng mới bằng migrations
                //trong bảng tạo 5 dữ liệu mẫu
            ],


        );
    }
}
