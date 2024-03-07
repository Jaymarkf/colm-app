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
    <style>
        .container {
            width: 100%;
            margin: auto;
        }
        
        .content {
            width: 70%;
            margin: auto;
            padding-top: 1rem;
        }

        .cal-ev-heading {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    @include('admin-dashboard/header')
    @include('admin-dashboard/mobile-nav')
    <div class="container">
        <div class="content">
            <div class="mb-3">
                <a href="{{ route('images.index') }}" class="bg-gray-500 px-2 py-1 text-white text-xs rounded">Back</a>
            </div>
            <h1 class="cal-ev-heading">Viewing: {{ json_decode($homeImage->content)->name }}</h1>
            <form action="{{ route('images.update') }}/{{ $homeImage->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="block">Name</label>
                    <input type="text" name="name" id="name" class="border p-2 rounded" style="width: 100%;" value="{{ json_decode($homeImage->content)->name }}">
                    @error('name')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="block">Image</label>
                    <input type="file" name="image" id="image">
                    @error('image')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                    <div>Thumbnail</div>
                    <img style='width: 100px; height: 70px; object-fit: cover;' src="{{ asset('storage/home_images/' .  json_decode($homeImage->content)->url) }}" alt="{{ json_decode($homeImage->content)->name }}" />
                </div>
                <div>
                    <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>
</html>