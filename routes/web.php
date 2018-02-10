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

// Route::get('basic1', function () {
//     return 'hello world';
// });
// Route::get('user/{id}/{name?}',function($id, $name = 'sean'){
// 	return 'User-id-'.$id.'-name-'.$name;
// })->where(['id'=>'[0-9]+', 'name'=>'[a-zA-z]+']);
// 
//Route::get('member/{id}', 'MemberController@info');
Route::any('/', 'IndexController@index');
Route::any('employee/show','EmployeeController@show');
Route::any('employee/add','EmployeeController@add');
Route::any('employee/update/{id}','EmployeeController@update');
Route::any('employee/delete/{id}','EmployeeController@delete');

Route::any('person/index','PersonController@index');

