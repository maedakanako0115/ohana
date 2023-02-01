<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use App\User;
use App\Diary;
use App\Group;
// use App\;


use Illuminate\Http\Request;

class DisplayController extends Controller
{
    // public function mainGast(){

    //     return view('main.guest');
    // }
    public function detailDiary(){
        $diary=new Diary;
        $eloquent=
        return view('detail.mydiary');
    }   
    public function detailMyaccount(){
        return view('detail.myaccount');
    }
    public function detailUseraccount(){
        return view('detail.useraccount');
    }




}
