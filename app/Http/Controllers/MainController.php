<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Home page';
        $v['all_products_results'] = Product::select('products.*','categories.c_title')->Live()->latest()->leftJoin('categories','products.cat_id','=','categories.id')->paginate(3);
        // dd($v['all_products_results']);
        return view('pages.home',$v);
    }
}
