<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Admin Home page';
        return view('admin.index',$v);
    }
    // dependency injection
    public function addProduct(Request $request){

        if($request->method() == 'POST'){
            // if(!empty($_POST['p_title'])){
            //     echo '<pre>';print_r('test');die();
            // }else{
            //     echo '<pre>';print_r('empoty');die();
            // }
            // if(!empty($request->p_title)){
            // if(!empty($request->post('p_title'))){
            //     echo '<pre>';print_r('test');die();
            // }else{
            //     echo '<pre>';print_r('empty');die();
            // }

            $request->validate([
                'p_title'=>'required',
                'p_url'=>'required',
                'p_price'=>'required',
                'p_quantity'=>'required',
                'p_detail'=>'required',
            ]);

            // for sizes variations store start
            $size_variations = array();
            if($request->size_s){
                $size_variations[] = $request->size_s;
            }
            if($request->size_m){
                $size_variations[] = $request->size_m;
            }
            if($request->size_l){
                $size_variations[] = $request->size_l;
            }
            $size_variations = json_encode($size_variations);

            // for sizes variations store end
            
            // for color variations store start
            $color_variations = array();
            if($request->color_r){
                $color_variations[] = $request->color_r;
            }
            if($request->color_b){
                $color_variations[] = $request->color_b;
            }
            if($request->color_g){
                $color_variations[] = $request->color_g;
            }
            $color_variations = json_encode($color_variations);
            // for color variations store end

            $ins = DB::table('products')->insert([
                'author_id'=>auth()->user()->id,
                'p_title'=>$request->p_title,
                'p_url'=>$request->p_url,
                'p_description'=>$request->p_description,
                'p_image'=>'s',
                'p_price'=>$request->p_price,
                'p_discount'=>$request->p_discount,
                'p_quantity'=>$request->p_quantity,
                'p_size'=>$size_variations,
                'p_color'=>$color_variations,
                'p_detail'=>$request->p_detail,
                'p_premium'=>$request->p_premium_note?1:0,
                'p_status'=>'2'
            ]);
            if($ins){
                return redirect()->back()->withErrors(['Post Added']);
            }else{
                return redirect()->back()->withErrors(['something went wrong']);
            }

        }
        $v = array();
        $v['title']= 'This is add Product page';
        return view('admin.addProduct',$v);
    }
}