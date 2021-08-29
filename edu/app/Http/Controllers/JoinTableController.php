<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\educational;
use DB;

class JoinTableController extends Controller
{
    function index()
    {
        $educationals = ('/educational')::orderby('id', 'DESC')->get()
            ->join('educational', 'educational.educational_id', '=', 'posts.educational_id')
            ->select('educational.educational_firstname', 'posts.posts_fullname')
            ->post();
        return view('join_table', $educationals);

        // $data = educational::table('posts')
        // ->join('educational','educational.educational_id','=','posts.educational_id')
        // ->select('educational.educational_firstname','posts.posts_fullname')
        // ->post();
        // return view('join_table', $data);
    }
}
