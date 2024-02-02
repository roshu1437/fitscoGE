@extends('admin.main')
@push('head')
    <style>
        .ck-editor__editable[role="textbox"]{
            min-height: 400px;
        }
    </style>
@endpush
@section('page')
    <h1>Product Add</h1>
    <form class="row g-3" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <label for="p_title" class="form-label">Product Title</label>
            <input type="text" class="form-control" id="p_title" name="p_title">
        </div>
        <div class="col-md-4">
            <label for="p_url" class="form-label">Product URL</label>
            <input type="text" class="form-control" id="p_url" name="p_url">
        </div>
        <div class="col-md-4">
            <label for="p_description" class="form-label">Product Description</label>
            <input type="text" class="form-control" id="p_description" name="p_description">
        </div>
        <div class="col-md-6">
            <label for="p_image" class="form-label">Product Images</label>
            <input class="form-control" type="file" id="p_image" multiple name="p_image[]">
        </div>
        <div class="col-md-2">
            <label for="p_price" class="form-label">Product Price $</label>
            <input type="number" class="form-control" id="p_price" name="p_price">
        </div>
        <div class="col-md-2">
            <label for="p_discount" class="form-label">Price Discount %</label>
            <input type="number" class="form-control" id="p_discount" name="p_discount">
        </div>
        <div class="col-md-2">
            <label for="p_quantity" class="form-label">Product Quantity</label>
            <input type="number" class="form-control" id="p_quantity" name="p_quantity">
        </div>
        <div class="col-md-6">
            <label class="form-label">Product Sizes: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="size_s" value="small" name="size_s">
                <label class="form-check-label" for="size_s">Small</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="size_m" value="medium" name="size_m" checked>
                <label class="form-check-label" for="size_m">Medium</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="size_l" value="large" name="size_l">
                <label class="form-check-label" for="size_l">Large</label>
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Product Colors: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="color_r" value="red" name="color_r" checked>
                <label class="form-check-label" for="color_r">Red</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="color_g" value="green" name="color_g">
                <label class="form-check-label" for="color_g">Green</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="color_b" value="blue" name="color_b">
                <label class="form-check-label" for="color_b">Blue</label>
            </div>
        </div>
        <div class="col-12">
            <label for="p_detail" class="form-label">Product Details</label>
            <textarea class="form-control" name="p_detail" id="p_detail" rows="10" placeholder="write product detail here"></textarea>
            <p class="text-end">Total Words Limit: <strong>500</strong></p>
        </div>
        <div class="col-12">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="p_premium_note" id="p_premium_note">
                <label class="form-check-label" for="p_premium_note">Is Product is Premium</label>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary" name="send_approval">Sending For Approval</button>
        </div>
    </form>

@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#p_detail' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection