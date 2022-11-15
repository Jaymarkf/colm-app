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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
  <noscript><link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css"></noscript>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" media="all" />
  <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js" defer></script>
</head>
<body>
@include('sections/header')
<div class="main-banner">
    <div class="container-slick">
      @if(count($banner_context))
        @foreach($banner_context['banner_image'] as $img => $key)
          <div class="slicked">
            <img src="{{$key}}" data-src="{{$key}}" 
            data-srcset="
            {{$key}} 300w,
            {{$key}} 600w,
            {{$key}} 900w,
            " class="lazyload" data-sizes="auto" alt="">
            @if($banner_context['banner_flag'][$img] == 'show')
            <div class="cbanner-blurb w-full md:absolute md:w-2/4">
              @if($banner_context['banner_link_blurb'][$img])  
                <a href="
                @if($banner_context['banner_link'][$img])
                {{$banner_context['banner_link'][$img]}}
                @endif
                " class="xl:text-2xl">
                {{$banner_context['banner_link_blurb'][$img]}}
                </a>
              @endif
              @if($banner_context['banner_blurb'][$img])
                <p class="xl:text-lg">
                  {{$banner_context['banner_blurb'][$img]}}
                </p>
              @endif
            </div>
            @endif
          </div>
        @endforeach
      @endif
    </div>
</div>
@include('sections/event-calendar')
@include('sections/news')
</body>
@include('/sections/footer')
@include('sections/modal-popup')
<script>
    $(document).ready(function(){
        $('.hm').click(function(){
                $('.hm-content').slideToggle();
        });
        
        $('.hdropdown').click(function(){
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
          autoplay: false,
          slidesToShow: 1,
          adaptiveHeight: true
        }); 
    });


</script>
</html>

