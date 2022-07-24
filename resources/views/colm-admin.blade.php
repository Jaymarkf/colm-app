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
        body{
            background-color:#024e28;
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
        <div class="container w-full h-full flex items-center justify-center">
                <div class="container-form w-2/4 flex items-center justify-center flex-col">
                    <div class="container-logo-img mb-10">
                    <img src="{{asset('storage/images/logo.webp')}}" data-src="{{asset('storage/images/logo.webp')}}" 
                                data-srcset="
                                {{asset('storage/images/logo.webp')}} 300w,
                                {{asset('storage/images/logo.webp')}} 600w,
                                {{asset('storage/images/logo.webp')}} 900w,
                                " class="lazyload" data-sizes="auto" alt="">
                    </div>
                    <form action="#" method="POST" class="flex flex-col items-center justify-center w-full">
                        @csrf
                        <input type="text" name="username" placeholder="Username"  class="admin-input w-full mb-2 h-8 p-2 px-3 text-sm" required>
                        <input type="password" name="password" placeholder="Password"  class="admin-input w-full mb-2 h-8 p-2 px-3 text-sm" required>
                        <button type="submit" class="admin-input w-full bg-gray-200 font-bold py-2 rounded-md hover:bg-lime-500 hover:text-white cursor-not-allowed" disabled>Log in</button>
                    </form>
                </div>
        </div>
</body>
</html>