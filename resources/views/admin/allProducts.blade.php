@extends('admin.main')
@section('page')
    <h1>All Product</h1>
    @if($all_products == 0)
        <h2 class="text-center">No products available right now</h2>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>P Title</th>
                    <th>P Url</th>
                    <th>P Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_products_results as $product)
                    <tr>
                        <td>1</td>
                        <td>{{$product['p_title']}}</td>
                        <td>{{$product['p_url']}}</td>
                        <td><img src="{{asset('p-images/').json_decode($product['p_image'],true)[0]}}" height="30px"></td>
                        <td>
                            <a href="{{route('updateProduct',$product['id'])}}" class="badge btn-info text-decoration-none">Update</a>
                            <a href="{{route('unapprovedProduct',$product['id'])}}" class="badge btn-warning text-decoration-none">Unapproved</a>
                            <a href="" class="badge btn-danger text-decoration-none">Reject</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection