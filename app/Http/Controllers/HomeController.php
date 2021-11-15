<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;

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
}
