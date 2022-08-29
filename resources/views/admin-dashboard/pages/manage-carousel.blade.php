<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR COLM</title>
    <link href="{{ mix('/css/colm-admin.css') }}" rel="stylesheet">
    <meta name="description" content="ADMIN - COLM - MAIN">
    <link rel="icon" type="image/x-icon" href="{{asset('storage/images/logo.webp')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body class="bg-emerald-800">
    @include('admin-dashboard/header')
    @include('admin-dashboard/mobile-nav')
    <main class="px-2 py-5">
    <form action="add_new_carousel" id="new_carousel_form" method="POST" enctype="multipart/form-data" class="mb-3">
        @csrf
        <label for="files" class="text-center block bg-emerald-900 text-slate-200 w-40 mx-auto py-2 mb-3 pl-2">
            Add New Carousel
            <input type="file" id="files" name="new_carousel" class="file" accept="image/png, image/jpeg, image/jpg, image/webp" style="width:1px;opacity:0;"required>
        </label>
        <span id="image_flag" class="text-center text-white"></span>
        <div class="flex items-center justify-center">
        <span class="text-white px-2 py-1 rounded bg-gradient-to-t from-red-500 border border-red-600 mr-3" id="cancel_new"><i class="fa fa-close"></i> Cancel</span>
        <button class="text-white px-2 py-1 rounded bg-gradient-to-t from-green-500 border border-lime-600 submit" type="submit"><i class="fa fa-save"></i> Save</button>
        </div>
    </form>
    <form action="update_delete_carousel" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container-add">
            <button type="submit" class="bg-red-500 text-white px-2  py-1 rounded text-xs">
                delete selected
            </button>
        </div>
        <div class="container-carousel flex flex-wrap">
            @foreach($banner_images as $key => $img)
                <div class="col-img flex items-center justify-center flex-col relative m-1">
                    <img src="{{asset($img)}}" data-src="{{asset($img)}}" 
                    data-srcset="
                    {{asset($img)}} 300w,
                    {{asset($img)}} 600w, 
                    {{asset($img)}} 900w,
                    " class="lazyload carousels" data-sizes="auto" alt="">
                    <div class="img-blurb absolute w-full h-full flex flex-col justify-start items-start z-10 bg-gradient-to-t from-stone-900 p-2">
                    <label for="{{'image-'.$key.'-id'}}">
                        <input type="checkbox" id="{{$banner_id[$key]}}" name="avatar[]" value="" class="check">
                    </label>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
    </main>
    <footer>    

    </footer>
</body>
<script>
$(document).ready(function(){
   $('[hamburger]').click(function(){
        $('.content-nav-mobile').slideToggle();
   });
   $('.nav-account').click(function(){
    $('.nav-account-dropdown').slideToggle();
   });
   $('.file').change(function(){
    let image = document.getElementById('files').files[0];
    $('#image_flag').html(image.name);
   });
   $('#cancel_new').click(function(){
    $('.file').val('');
    $('#image_flag').text('');
   });
});
</script>


</html>