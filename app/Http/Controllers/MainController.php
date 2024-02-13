<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Home page';
        $v['all_products_results']= Product::where('p_status',1)->orderBy('id', 'DESC')->get()->toArray();
        return view('pages.home',$v);
    }
}
