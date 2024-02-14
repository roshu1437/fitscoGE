<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MainController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Home page';

        //without Scope
        // $v['all_products_results']= Product::select('products.*','categories.c_title')->where('p_status',1)->orderBy('id', 'DESC')->leftJoin('categories','products.cat_id','=','categories.id')->get()->toArray();

        //with Scope
        $v['all_products_results']= Product::select('products.*','categories.c_title')->Live()->orderBy('id', 'DESC')->leftJoin('categories','products.cat_id','=','categories.id')->get()->toArray();

        //with single column select
        // $v['all_products_results']= Product::select('products.id','products.p_title','products.p_discount','products.p_price','products.p_detail','products.p_quantity','categories.c_title')->where('p_status',1)->orderBy('id', 'DESC')->leftJoin('categories','products.cat_id','=','categories.id')->get()->toArray();
        return view('pages.home',$v);
    }
}
