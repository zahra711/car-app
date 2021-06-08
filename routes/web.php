<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::any('/add','PostController@index');

Route::post('/addstore','PostController@store')->name('post.store');
Route::post('/showAddedCar','AjaxController@showAddedCar');
Route::post('/showUsers','AjaxController@showUsers');
Route::Delete('/postdelete','PostController@destroy');
Route::get('/message',function () {
        return view('home.message');
    });
//admin section routes group

Route::get('/manage', function () {
    return view('admin.dashbord');
});

Route::name('admin')->group(function(){

    Route::get('/product', function () {
        return view('home.product_page');
    });

//    Route()::get('/about/edit','AboutController@edit');

//    Route::resource('/post','PostController`');
//    Route::get('post', 'PostController@index');
    Route::get('post', 'PostController@index');
    Route::get('post/store', 'PostController@store');
    Route::get('post/show/{id}', 'PostController@show');
    Route::get('post/edit/{id}', 'PostController@edit');
    Route::get('post/update/{id}', 'PostController@update');
    Route::get('post/destroy/{id}', 'PostController@destroy');
    Route::get('post/create', 'PostController@create');

    Route::fallback(function () {
        return view('home.404');
    });
});
