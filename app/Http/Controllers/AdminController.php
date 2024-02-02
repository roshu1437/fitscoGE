<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Admin Home page';
        return view('admin.index',$v);
    }
    public function addProduct(){
        $v= array();
        $v['title']= 'This is add Product page';
        return view('admin.addProduct',$v);
    }
}
