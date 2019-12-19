<?php

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
// Route::get('product', function () {
// echo 'Đây là trang product';
// });
// // router có tham số
// Route::get('users/{id}', function ($id) {
//     echo "Đây là trang của $id";
// });
// // route có 2  tham số
// Route::get('users/{name}/{address}', function ($name,$address) {
//     echo "Xin chào $name . Địa chỉ của bạn là $address";
// });

///////////////////////////////// PROJECT/////////////////////

// trang user
Route::get('users', 'UserController@getUser');
// trang user add
Route::get('users/addUser', 'UserController@getAddUser');
// trang user edit
Route::get('users/editUser', 'UserController@getEditUser');

Route::post('users/addUser','UserController@postAddUser' );
Route::post('users/editUser','UserController@postEditUser' );
