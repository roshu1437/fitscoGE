<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Home page';
        return view('pages.home',$v);
    }
}
