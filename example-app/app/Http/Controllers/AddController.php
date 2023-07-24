<?php

namespace App\Http\Controllers;

use App\Models\Tests;
use Database\Seeders\customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AddController extends Controller
{
    public function addCustomer(Request $request)
    {
        $title = "add new customer";
        if ($request->isMethod('post')) {
            // dd($request);
            //Lấy giữ liệu mà request gửi
            $pragam = $request->post();
            unset($pragam['_token']);
            // dd($pragam);

            //cách thêm 1
            // DB::table('tests')->insert($pragam);
            // cách 2 Thêm dữ liệu bằng model
            $customer = new Tests();
            $customer->name = $request->name;
            $customer->email = $request->email;
            $customer->phone = $request->phone;
            $customer->date = $request->date;
            $customer->address = $request->address;
            $customer->gender = $request->gender;
            $customer->image = $request->img;

            // dd($customer);
            // thực hiện công việc lưu
            $customer->save();


            //Tao thông báo
            if ($customer->save()) {
                Session::flash('success', 'Thêm Khách hàng thành công');
                return redirect()->route('search_name');
            } else {
                Session::flash('error', 'Lỗi Thêm Khách hàng');
            }
        }

        return view('customer.add', compact('title'));
    }
}
