@extends('admin.main')
@push('head')
    <style>
        .ck-editor__editable[role="textbox"]{
            min-height: 400px;
        }
    </style>
@endpush
@section('page')
    <h1>Category Add</h1>
    <form class="row g-3" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <label for="c_title" class="form-label">Category Title</label>
            <input type="text" class="form-control" id="c_title" name="c_title" value="{{old('c_title')}}">
        </div>
        <div class="col-md-4">
            <label for="c_url" class="form-label">Category URL</label>
            <input type="text" class="form-control" id="c_url" name="c_url" value="{{old('c_url')}}">
        </div>
        <div class="col-md-4">
            <label for="c_description" class="form-label">Category Description</label>
            <input type="text" class="form-control" id="c_description" name="c_description" value="{{old('c_description')}}">
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary" name="send_approval">Add Category</button>
        </div>
    </form>
@endsection