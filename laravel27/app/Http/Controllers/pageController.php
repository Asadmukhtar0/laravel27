<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mylist;

class pageController extends Controller
{
    //
    public function home(){
        $mylists = mylist::orderby('id','DESC')->get();
        return view('welcome', compact('mylists'));
    }
    public function save(Request $request){
        $mylist = new mylist;
        $mylist->name = $request->listname;
        $mylist->save();
        return redirect()->back()->with('message','Data Posted Succesfully');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    // delet function
    public function delete($id){
        $mylist = mylist::find($id);
        $mylist->delete();
        return redirect()->back()->with('message','Deleted Succesfully');
    }
    // edit
    public function edit($id){
        return $id;
    }
    public function update($id, Request $request){
        
    }
}
