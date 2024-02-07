@extends('admin.main')
@section('page')
    <h1>All Pending Product</h1>
    @if($all_pending == 0)
        <h2 class="text-center">No Pending Products available right now</h2>
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
                            <a href="{{route('approvedProduct',$product['id'])}}" class="badge btn-primary text-decoration-none">Approved</a>
                            <a href="" class="badge btn-danger text-decoration-none">Reject</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection