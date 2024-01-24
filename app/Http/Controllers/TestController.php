<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller{
    public function abc(){
        $v= array();

        $v['w']= 'Test abc This is a test';
        // $v['a']= 'This is a';
        return view('xyz',$v);
    }
    public function xyz(){
        $abc= array();
        
        $abc['t']= 'Test xyz';
        // $abc['b']= 'This is b';

        return view('pages.test',$abc);
    }
}
