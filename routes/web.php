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

    return view('welcome');
});

Route::get('/', function () {

return view('newfolder.Omama');
});


// to make new view page
Route::get('/test', function () {

return view('yyy.nano');
});


Route::get('contact/{id}', function ($id) {

    return $id;
   });

Route::get('/category/{id}', function ($id) {
$cats=[
    1=>"games",
    2=>"tools",
    3=>"books"
];
    return view('category',['cat'=>$cats[$id]??"not found"]) ;
   });

   Route::get('contact', function () {
    $name=request("name");
    return $name;
   });

