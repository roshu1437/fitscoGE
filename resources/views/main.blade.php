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
    <div class="container my-4">
        @yield('page')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @includeFirst(['pages.footer'])
    <script>
        $('#start_search').click(function(){
            var sv = $('#search_inp').val();
            if(sv != '') {
                $.get('{{route('search')}}?v='+sv).then(function(res){
                    var html = ''; 
                    $(res).each(function(key,value){
                        html+='<a href="">'+value.p_title+'</a>';
                    });
                    $('.search_box').html(html);
                    $('.search_box').show();
                })
            }
        })
        $('#search_inp').keyup(function(){
            var sv = $('#search_inp').val();
            if(sv != '') {
                $.get('{{route('search')}}?v='+sv).then(function(res){
                    var html = ''; 
                    $(res).each(function(key,value){
                        html+='<a href="https://youtube.com">'+value.p_title+'</a>';
                    });
                    $('.search_box').html(html);
                    $('.search_box').show();
                })
            }
        })
        $('#search_inp').focusout(function(){
            $('.search_box').html('');
            $('.search_box').hide();
        });
        // $('#search_inp').hover(function(){
        // },function(){
        //     $('.search_box').html('');
        //     $('.search_box').hide();
        // });
    </script>
</body>
</html>