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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
                                //Урок 5//
//Route::match(['post','get'],'sendMail',function (){
//
//
//    if (!empty($_POST)){
//        dump($_POST);
//   }
//    return view('contact');
//})->name('sendMail');
//Route::get('SendMail',function (){
//        return view('contact');
//});
//Route::post('/Send',function (){
//    if(!empty($_POST)){
//        dd($_POST);
//    }
//});                   //Урок 6//
//Route::match(['get','post'],'SendMail',function (){
//
//        if (!empty($_POST)){
//            dump($_POST);
//        }
//        return view('contact');
//});
//
//Route::get('/post/edit/{id?}',function ($id=null){
//    return "Edit Post $id";
//})->where('id','[0-9]+')->name('create');
////
//                        Урок 7
Route::match(['get','post'],'/home','HomeController@index');
Route::get('/page/{slug}','PageController@show');

Route::fallback(function () {
    return view('welcome');
});
                        //**Lesson 8**//
Route::resource('/posts','PostController');
