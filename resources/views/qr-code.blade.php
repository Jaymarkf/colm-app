<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLM</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{asset('/images/logo.webp')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
</head>
<body class="py-16">

<div id="content" class="max-w-[90%] mx-auto w-full">
    @if($images)
        @foreach($images as $img)
            <img src="{{asset('storage/qr_images/'.$img->filename)}}" class="w-full mb-4" loading="lazy" alt="">
        @endforeach
    @endif
</div>
<span class="block text-center mt-5 text-xl font-bold">Download the Online Brochure.</span>
<a href="/qr-code/brochure" target="_blank" class="button block text-center mt-2 text-2xl font-bold text-white bg-emerald-500 max-w-max px-8 py-2 mx-auto rounded-md">CLICK HERE</a>

<script src="{{ mix('js/app.js') }}"></script> 

</body>
</html>