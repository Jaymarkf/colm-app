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
    <main>
        
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
});
</script>


</html>