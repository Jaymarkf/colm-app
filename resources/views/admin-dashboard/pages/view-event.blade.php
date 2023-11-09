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
                <a href="{{ route('events.update') }}" class="bg-gray-500 px-2 py-1 text-white text-xs rounded">Back</a>
            </div>
            <h1 class="cal-ev-heading">Viewing: {{ $event->title }}</h1>
            <form action="{{ route('events.update') }}/{{ $event->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="event_date" class="block">Event Date</label>
                    <input type="date" name="event_date" id="event_date" class="border p-2 rounded" style="width: 100%;" value="{{ $event->event_date }}">
                    @error('event_date')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" name="title" id="title" placeholder="Enter event title" class="border p-2 rounded" style="width: 100%;" value="{{ $event->title }}">
                    @error('title')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" name="sub_title" id="sub_title" placeholder="Enter event sub title" class="border p-2 rounded" style="width: 100%;" value="{{ $event->sub_title }}">
                    @error('sub_title')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Enter event description"></textarea>
                    @error('content')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="event_image" class="block">Image</label>
                    <input type="file" name="event_image" id="event_image">
                    @error('event_image')
                        <div class="text-xs" style="color: red;">{{ $message }}</div>
                    @enderror
                    <div style="margin-top: 1rem;" class="text-sm italic">Current image:</div>
                    <img alt="Event image preview" src="{{ asset('storage/event_images/' .  $event->event_image) }}" style="margin-top: 0.5rem; max-height: 400px; width: 100%; object-fit: cover;">
                </div>
                <div>
                    <button type="submit" class="bg-gray-500 text-white px-3 py-1 rounded">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .then(editor => {
            editor.setData("{!! $event->content !!}");
        })
        .catch(error => {
            console.error(error);
        });
</script>
</html>