<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class AdminController extends Controller{
    public function index(){
        $v= array();
        $v['title']= 'This is Admin Home page';
        $v['all_pending']= Product::where('p_status',2)->count();
        $v['all_products']= Product::where('p_status',1)->count();
        return view('admin.index',$v);
    }
    public function allProducts(){
        $v= array();
        $v['title']= 'This is All Products page';
        $v['all_pending']= Product::where('p_status',2)->count();
        $v['all_products']= Product::where('p_status',1)->count();
        $v['all_products_results']= Product::where('p_status',1)->get()->toArray();
        return view('admin.allProducts',$v);
    }
    public function allPendingProducts(){
        $v= array();
        $v['title']= 'This is All Pending Products page';
        $v['all_pending']= Product::where('p_status',2)->count();
        $v['all_products']= Product::where('p_status',1)->count();
        $v['all_products_results']= Product::where('p_status',2)->get()->toArray();
        return view('admin.allPendingProducts',$v);
    }
    public function approvedProduct($post_id){
        Product::where('id',$post_id)->update(['p_status'=>1]);
        return redirect()->back()->with(['success'=>'Post Approved Successfully']);
    }
    public function unapprovedProduct($post_id){
        Product::where('id',$post_id)->update(['p_status'=>2]);
        return redirect()->back()->with(['success'=>'Post Unapproved Successfully']);
    }
    // dependency injection
    public function addProduct(Request $request){

        // $v=Product::get();
        // dd($v);
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


            $request->validate(
                [
                    'p_title'=>'required',
                    'p_url'=>'required|unique:products',
                    'p_price'=>'required',
                    'p_quantity'=>'required',
                    'p_detail'=>'required',
                    'p_image.*'=>'required|max:5000|mimes:jpg,png',
                ],
                [
                    'p_url.required' => 'Please enter a product URL',
                    'p_url.unique' => 'This Product url already exist',
                ]
            );

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

            // for images
            $images = $request->file('p_image');
            $images_names=array();
            foreach($images as $k => $v) {
                // $_FILES['p_image'][$k]['size']
                $size = $v->getSize();
                $name = time().'-'.$k.'-'.$v->getClientOriginalName();
                if($v->move('p-images', $name)){
                    $images_names[] = $name;
                }
            }
            $images_names = json_encode($images_names);
            // $ins = DB::table('products')->insert([
            //     'author_id'=>auth()->user()->id,
            //     'p_title'=>$request->p_title,
            //     'p_url'=>$request->p_url,
            //     'p_description'=>$request->p_description,
            //     'p_image'=>$images_names,
            //     'p_price'=>$request->p_price,
            //     'p_discount'=>$request->p_discount,
            //     'p_quantity'=>$request->p_quantity,
            //     'p_size'=>$size_variations,
            //     'p_color'=>$color_variations,
            //     'p_detail'=>$request->p_detail,
            //     'p_premium'=>$request->p_premium_note?1:0,
            //     'p_status'=>'2'
            // ]);
            $ins = Product::insert([
                'author_id'=>auth()->user()->id,
                'p_title'=>$request->p_title,
                'p_url'=>$request->p_url,
                'p_description'=>$request->p_description,
                'p_image'=>$images_names,
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
                return redirect()->back()->with(['success'=>'Post Added']);
            }else{
                return redirect()->back()->withErrors(['something went wrong']);
            }
        }
        $v = array();
        $v['title']= 'This is add Product page';
        $v['all_pending']= Product::where('p_status',2)->count();
        $v['all_products']= Product::where('p_status',1)->count();
        return view('admin.addProduct',$v);
    }
}
