<?php

namespace App\Http\Controllers;

use Database\Seeders\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function Test()
    {
        // Kiến thức buổi 3

    }


    public function listCustomer(Request $request)
    {
        $title = "Hien thi";
        // Hiển thị ra view blade 
        //dữ liệu cứng
        $id = 1;
        $name = "Hoang Minh anh";
        $email = "Anh@gmail.com";
        $sdt = "0366792915";
        // return view('customer.index', compact('title', 'id', 'name', 'sdt', 'email'));
        //end

        //Lấy dữ liệu từ db
        // dd($request);
        if ($request->post()) {
            $customer = DB::table('tests')
                ->where('name', 'like', '%' . $request->Tim_name . '%')->get();
        }
        $customer = DB::table('tests')->get();
        return view('customer.index', compact('title', 'customer'));
    }
}
