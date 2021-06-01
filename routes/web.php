<?php

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
    return view('home.index');
});

//home section routes group
// Route::name('home')->group(function(){
//
//     Route::get('/', function () {
//         return view('home.index');
//     });
//     Route::get('/about','aboutController@index');
//
// });

//admin section routes group

Route::name('admin')->group(function(){

    Route::get('/manage', function () {
        return view('admin.dashbord');
    });
    Route::get('/add', function () {
        return view('home.add');
    });
    Route::get('/product', function () {
        return view('home.product_page');
    });
//    Route()::get('/about/edit','AboutController@edit');
});
