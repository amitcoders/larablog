<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostsController extends Controller
{
   
   public function contact(){
       
    $people = ['amit', 'kumar', 'thakur'];
    return view('contact', compact('people'));
        
   }
   
   
   
   
    public function show_post(){
        return view('post');
    }


}
