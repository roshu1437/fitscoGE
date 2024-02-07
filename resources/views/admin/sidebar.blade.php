<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="admin/all-pending-products.php" class="text-decoration-none text-dark">All Pending Products</a>
        <span class="badge bg-primary rounded-pill">{{$all_pending}}</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="admin/all-products.php" class="text-decoration-none text-dark">All Products</a>
        <span class="badge bg-primary rounded-pill">{{$all_products}}</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="{{route('addProduct')}}" class="text-decoration-none text-dark">Add A New Product</a>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="admin/add-category.php" class="text-decoration-none text-dark">Categories Info</a>
    </li>
</ul>