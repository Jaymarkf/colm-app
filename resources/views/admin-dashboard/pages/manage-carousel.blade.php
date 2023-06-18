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
<body>
    @include('admin-dashboard/header')
    @include('admin-dashboard/mobile-nav')
    <main class="px-2 py-5">
    <form action="/add_new_carousel" id="new_carousel_form" method="POST" enctype="multipart/form-data" class="mb-3 lg:flex lg:flex-col lg:items-start">
        @csrf
        @if($errors->any())
        <h4 class="bg-red-200 py-1 px-2 rounded border border-red-400 text-center w-full sm:w-430px" style="margin:0 auto 20px auto;">{{$errors->first()}}</h4>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li class="bg-green-200 py-1 px-2 rounded border text-center w-full sm:w-430px" style="margin:0 auto 20px auto;">{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
       
        <label for="files" class="text-center block bg-white-600 text-slate-800 w-40 py-2 mb-3 pl-2 border cursor-pointer hover:bg-slate-100 rounded-lg lg:m-0">
            Add New Carousel
            <input type="file" id="files" name="new_carousel" class="file" accept="image/png, image/jpeg, image/jpg, image/webp" style="width:1px;opacity:0;" required>
        </label>
        <span id="image_flag" class="text-center text-slate-800"></span>
        <div class="flex items-center justify-start">
        <span class="text-slate-800 px-2 py-1 rounded bg-gray-100 hover:bg-gray-200 mr-3 cursor-pointer" id="cancel_new"><i class="fa fa-close"></i> Cancel</span>
        <button class="text-slate-800 px-2 py-1 rounded bg-green-100 hover:bg-green-200 border submit" type="submit"><i class="fa fa-save"></i> Save</button>
        </div>
    </form>
    @if(count($banner_images))
        <div class="container-carousel flex flex-wrap justify-center border border-slate-400 rounded-lg py-2">
            @foreach($banner_images as $key => $img)
                <br>
                <div class="col-img flex items-center justify-center flex-col relative m-1 md:w-[32%] lg:w-1/5">
                 
                    <img src="{{asset('storage/images/carousel/'. $img->banner_name)}}" data-src="{{asset('storage/images/carousel/'. $img->banner_name)}}" 
                    data-srcset="
                    {{asset('storage/images/carousel/'. $img->banner_name)}} 300w,
                    {{asset('storage/images/carousel/'. $img->banner_name)}} 600w, 
                    {{asset('storage/images/carousel/'. $img->banner_name)}} 900w,
                    " class="lazyload carousels" data-sizes="auto" alt=""> 
                    <div class="img-blurb absolute w-full h-full flex flex-col justify-start items-start z-10 bg-gradient-to-t from-stone-900 p-2">
                        <div class="row-action flex">
                            <span class="bg-gray-500 px-3 py-1 rounded-lg cursor-pointer hover:bg-gray-400 mr-3 btn_edit" title="edit" data-modal-toggle="defaultModal" banner_id="{{$img->id}}">
                                <i class="fa fa-edit text-white"></i>
                            </span>
                            <span class="bg-gray-500 px-3 py-1 rounded-lg cursor-pointer hover:bg-gray-400 btn_delete" title="delete" banner_delete_id="{{$img->id}}">
                                <i class="fa fa-trash text-red-300"></i>
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <h3 class="block w-full text-lg text-center">There are no banner images.</h3>
    @endif
    </main>
    <footer>    
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Edit Banner
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form action="/update_delete_carousel" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="p-6 space-y-6">
                            <div class="text-center" modal-content>
                                <div role="status">
                                    @include('svg/loading')
                                    <div edit_form_content class="hidden">
                                            <img class="lazyload w-auto mx-auto max-h-48" src="" alt="image here..." id="blah">
                                            <input type="hidden" name="banner_ids" value="" e_banner>
                                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Edit Banner</label>
                                                <input name="banner_file" class="e_input p-3 block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                                            <div class="mb-6">
                                                <label for="banner_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Banner link</label>
                                                <input name="banner_link" type="text" id="banner_link" class="e_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                            <div class="mb-6">
                                                <label for="banner_context" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Banner Context</label>
                                                <input name="banner_context" type="text" id="banner_context" class="e_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                            <div class="mb-6">
                                                <label for="button_caption" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Button Caption</label>
                                                <input name="button_caption" type="text" id="button_caption" class="e_input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex items-center p-6 space-x-2 rounded-b border-t border-gray-200 dark:border-gray-600">
                            <button type="submit" class="text-gray-500 bg-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg border border-gray-200 text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 hover:bg-green-100"><i class="fa fa-save"></i> Save</button>
                            <button data-modal-toggle="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"><i class="fa fa-close"></i> Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
        
</body>
<script type="text/javascript" src="{{asset('js/custom-script.js')}}"></script>
<script type="text/javascript" src="{{asset('js/manage-carousel.js')}}"></script>
</html>
<style>
    @media(max-width:499px){
        #defaultModal div:first-child{
            max-width:23rem;
        }
        .e_input{
            padding: 5px 9px;
        }
        [edit_form_content] .mb-6{
            margin-bottom:0.2rem;
        }
    }
</style>