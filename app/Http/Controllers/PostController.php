<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function list(){
        $lists =['a'=>'Article 1' , 'b' =>'Article 2'];
        return view('posts.liste', compact('lists'));
    }

    public function  commentaire(){
        return view('posts.commentaire');
    }
}
