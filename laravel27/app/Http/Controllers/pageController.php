<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\mylist;
use Mail;
class pageController extends Controller
{
    //
    public function home(){
        $mylists = mylist::orderby('id','DESC')->paginate(10);
        return view('welcome', compact('mylists'));
    }
    public function save(Request $request){
        $mylist = new mylist;
        $mylist->name = $request->listname;
        $mylist->save();
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail', $data, function($message) {
            $message->to('axad03213@gmail.com', 'Asad Mukhtar')->subject
            ('Checking purpose');
            $message->from('xyz@gmail.com','Virat Gandhi');
        });
        //echo "HTML Email Sent. Check your inbox.";
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
