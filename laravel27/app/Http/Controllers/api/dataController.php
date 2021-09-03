<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\mylist;
class dataController extends Controller
{
    //
    public function list(){
        $list = mylist::all();
        return response()->json($list);
    }
    
    public function search(Request $request){
        $list = mylist::where('name',$request->name)->first();
        if(!empty($list)){
            $data = [
                'status' => 200,
                'Data' => $list
            ];
            return $data;
        } else {
            $data = [
                'status' => 404,
                'Data' => $list
            ];
            return $data;
        }
    }

    public function save(Request $request){
      
        $mylist = new mylist;
        $mylist->name = $request->name;
        $mylist->save();
        
    }
}
