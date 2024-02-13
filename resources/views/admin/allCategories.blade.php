@extends('admin.main')
@section('page')
    <h1>All Categories</h1>
    @if($all_products == 0)
        <h2 class="text-center">No products available right now</h2>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Title</th>
                    <th>Category Url</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_categories as $category)
                    <tr>
                        <td>1</td>
                        <td>{{$category['c_title']}}</td>
                        <td>{{$category['c_url']}}</td>
                        <td>
                            <a href="{{route('updateProduct',$category['id'])}}" class="badge btn-info text-decoration-none">Update</a>
                            <a href="{{route('deleteCategory',$category['id'])}}" class="badge btn-danger text-decoration-none">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection