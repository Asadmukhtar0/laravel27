<?php

namespace App\Http\Controllers\check;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class checkController extends Controller
{
    //
    public function about(){
        return view('about');
    }
}
