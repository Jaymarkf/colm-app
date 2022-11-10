<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR COLM</title>
    <link href="{{ mix('/css/colm-admin.css') }}" rel="stylesheet">
    <meta name="description" content="ADMIN - COLM">
    <script src="https://afarkas.github.io/lazysizes/lazysizes.min.js" defer></script>
    <link rel="icon" type="image/x-icon" href="{{asset('storage/images/logo.webp')}}">

    <style>
        body,html{
            margin:0;
            padding:0;
            width:100%;
            height:100%;
        }
        *{
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
        .admin-input{
            max-width:15rem;
        }
        .container-logo-img img{
            width: 180px;
        }
    </style>
</head>
<body>
        <div class="container mx-auto w-full h-full flex items-center justify-center">
               
                <div class="container-form w-2/3 flex items-center justify-center flex-col">
                    <div class="container-logo-img mb-2">
                    <img src="{{asset('storage/images/logo.webp')}}" data-src="{{asset('storage/images/logo.webp')}}" 
                                data-srcset="
                                {{asset('storage/images/logo.webp')}} 300w,
                                {{asset('storage/images/logo.webp')}} 600w,
                                {{asset('storage/images/logo.webp')}} 900w,
                                " class="lazyload" data-sizes="auto" alt="">
                    </div>
                    @if(Session::get('fail'))
                    <span class="text-danger font-weight-bold text-center  text-sm text-red-500 mb-3">{{ Session::get('fail') }}</span>
                    @endif
                    <form action="login-colm-admin" method="POST" class="flex flex-col items-center justify-center w-full">
                        @csrf
                        <input type="text" name="username" placeholder="Username"  class="border border-gray-400 rounded-lg admin-input w-full mb-2 h-8 p-2 px-3 text-sm" required>
                        <!-- <small class="mb-2 text-red-400">error</small> -->
                        <input type="password" name="password" placeholder="Password"  class="border border-gray-400 rounded-lg admin-input w-full mb-2 h-8 p-2 px-3 text-sm" required>
                        <!-- <small class="mb-2 text-red-400">error</small> -->
                        <button type="submit" class="admin-input w-full bg-gray-200 font-bold py-2 rounded-md hover:bg-lime-500 hover:text-white">Log in</button>
                        <small class="block text-right w-full max-w-[240px] mt-3">
                            <a href="/" class="text-blue-400  underline underline-offset-4">go back to front page</a>
                        </small>
                    </form>
                </div>
        </div>
</body>
</html>