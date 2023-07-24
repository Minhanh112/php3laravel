<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', function () {
    return view('new');
});
route::get('/customers', [TestController::class, 'listCustomer']);
route::post('/post', [TestController::class, 'listCustomer'])->name('search_name');
//Khi tồn tại 1 action thì thực hiện route post


// route::get('/addCustomer', [AddController::class, 'addCustomer']);

//match cho phép bạn tru cập 1 hoặc nhiều phương thức khác nhau
route::match(['get', 'post'], '/addcustomer', [AddController::class, 'addCustomer'])->name('add_Customer');
