@extends('main')
@section('page')
    @push('head')
        <style>
            .red{
                color: red;
            }
        </style>
    @endpush
    <div class="row mx-0">
        {{-- {{dd($all_products_results)}} --}}
        @foreach ($all_products_results as $product)
            <div class="col-lg-3 col-md-4 col-sm-6  col-xs-12">
                <div class="card">
                    <img src="{{asset('p-images/demo1.jpg')}}" class="card-img-top" alt="tech image">
                    <div class="card-body">
                        <h5 class="card-title">{{$product['p_title']}}</h5>
                        <p class="d-flex justify-content-between">
                            @php
                                $discount_price = ($product['p_discount']/100)*$product['p_price'];
                                $discount = $product['p_price']-$discount_price;
                            @endphp
                            <span>Price:<del>${{$product['p_price']}}</del>-<strong>${{round($discount)}}</strong></span>
                            <span>Cat:<strong><a href="category.php">Tech</a></strong></span>
                        </p>
                        <p class="card-text">{{substr(strip_tags($product['p_detail']),0,50)}}</p>
                        {{-- <p class="card-text">{!!substr($product['p_detail'],0,50)!!}</p> --}}
                        <p class="d-flex justify-content-between align-items-center">
                            <a href="detail.php" class="btn btn-primary">Buy Now</a>
                            @if ($product['p_quantity'] < 1)
                                <strong class="text-danger">Out of Stock</strong>
                            @else
                                <strong class="text-success">In Stock</strong>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection