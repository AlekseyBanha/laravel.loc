<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
        public function index(){
//            lesson 9
//        dump($_ENV['MY_SETTING']);
//        dump(env('MY_SETTING'));
//        dump(config('app.timezone'));
//        dump($_ENV);

            if(!empty($_POST['name'])){
                echo 'Hello '.$_POST['name'].',You mail-'.$_POST['email'];
            }else{echo 'Enter information :)';}
            return view('contact');
        }

        public function test(){
            if(!isset($_POST['a']) && !isset($_POST['b'])){echo"Введите числа";}
            else{ echo $_POST['a']+$_POST['b'];}


                return view('test');
        }
    public function db(){
//        lesson 10-11
//    $query = DB::insert("INSERT INTO `posts_xyi` ( title, text) VALUES ( ?, ?)",['das2в2da','da414sdasdas']);
//    $query = DB::insert("INSERT INTO `posts_xyi` ( title, text) VALUES ( :title, :content)",['title'=>'das2в2da','content'=>'da414sdasdas']);
//    DB::delete('DELETE FROM `posts_xyi` WHERE id=?',[5]);
    $posts=DB::select("SELECT * FROM `city` WHERE id>:id",['id'=>12]);
//    DB::update("UPDATE `posts_xyi` SET title = 'dadadasd22sdf' WHERE id=:id",['id'=>2]);
    return $posts;
    }

}
