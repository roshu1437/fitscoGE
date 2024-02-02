<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title??'This is main title'}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @stack('head')
</head>
<body>
    @includeFirst(['pages.navbar'])
    <div class="container-fluid">
        <div class="row mx-0">
            <div class="col-3">
                @include('admin.sidebar')
            </div>
            <div class="col-8">
                @yield('page')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @yield('scripts')
    @includeFirst(['pages.footer'])
</body>
</html>