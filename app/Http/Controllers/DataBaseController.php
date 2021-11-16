<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class DataBaseController extends Controller {

    public function index(){

//    $data=DB::table('country')->get();
//        $data=DB::table('country')->limit(4)->get();
//        $data=DB::table('country')->select('Code','Name')->limit(4)->get();
//        $data=DB::table('country')->select('Code','Name')->orderBy('Code','desc')->first();
//        $data=DB::table('city')->select('ID','Name')->find(2);
//
//        $data=DB::table('city')->select('ID','Name')->where([
//            ['id','>=',1],
//            ['id','<',5]
//
//
//
//        ])->get();

//        $data=DB::table('city')->where([
//            ['id','>=',1],
//            ['id','<',5]
//
//
//
//        ])->get();
//
//        $data=DB::table('country')->limit(10)->pluck('Name','Code');

//        $data=DB::table('country')->max('Population');
//        $data=DB::table('country')->sum('Population');
//        $data=DB::table('country')->avg('Population');

////        $data=DB::table('city')->select('CountryCode')->distinct()->get();
//
//        $data=DB::table('city')->select('city.ID','city.Name as city_name','country.Code','country.Name as country_name')->limit(10)
//            ->join('country','city.CountryCode','=','country.Code')
//            ->orderBy('city.ID')
//            ->get();
//
//        dd($data);
//





//            lesson 13


    $post=new Post();
    $post->title ='pg1';
//    $post->text='dad2';
    $post->save();




    }











}
