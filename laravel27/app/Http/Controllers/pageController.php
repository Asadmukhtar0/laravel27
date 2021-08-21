<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mylist;

class pageController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }
    public function save(Request $request){
        $mylist = new mylist;
        $mylist->name = $request->listname;
        $mylist->save();
        return redirect()->back();
    }

    public function about(){
        return view('welcome');
    }
    public function contact(){
        return view('welcome');
    }
}
