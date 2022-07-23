<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="COLM">
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/dashboard.css') }}" rel="stylesheet" type="text/css" >
  <title>COLM</title>
  <link rel="icon" type="image/x-icon" href="{{asset('storage/images/logo.webp')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js" defer></script>

 
</head>
<body>



@include('sections/header')
<div class="main-banner">
    <div class="container-slick">
        <div class="slicked">
          <img src="{{asset('storage/images/cat.webp')}}" data-src="{{asset('storage/images/cat.webp')}}" 
          data-srcset="
          {{asset('storage/images/rabit.webp')}} 300w,
          {{asset('storage/images/rabit.webp')}} 600w,
          {{asset('storage/images/rabit.webp')}} 900w,
          " class="lazyload" data-sizes="auto" alt="">
        </div>
        <div class="slicked">
          <img src="{{asset('storage/images/cat.webp')}}" data-src="{{asset('storage/images/cat.webp')}}" 
          data-srcset="
          {{asset('storage/images/cat.webp')}} 300w,
          {{asset('storage/images/cat.webp')}} 600w,
          {{asset('storage/images/cat.webp')}} 900w,

          " 
          class="lazyload" alt="">
        </div>
    </div>
</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('.hm').click(function(){
                $('.hm-content').slideToggle();
        });

        $('.hdropdown').click(function(){
;
            $(this).siblings('.hdcontent').slideToggle("fast",function(){
                if($(this).prev().children('.fa').hasClass("caret-up")){
                    $(this).prev().children('.fa').removeClass("caret-up");
                    $(this).prev().children('.fa').addClass("caret-down");
                }else{
                    $(this).prev().children('.fa').removeClass("caret-down");
                    $(this).prev().children('.fa').addClass("caret-up");
                }
            });
        });
        $('.container-slick').slick({
          dots: true,
          infinite: true,
          arrows:true,
          slidesToShow: 1,
          adaptiveHeight: true
        }); 
    });


</script>
