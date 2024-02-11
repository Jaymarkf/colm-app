<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMINISTRATOR COLM</title>
    <link href="{{ mix('/css/colm-admin.css') }}" rel="stylesheet">
    <meta name="description" content="ADMIN - COLM - MAIN">
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.webp')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- DataTables CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <!-- DataTables Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.css">
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <!-- DataTables Responsive JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body{
            height:100%;
        }
    </style>
</head>
<body class="relative">
    @include('admin-dashboard/header')
    @include('admin-dashboard/mobile-nav')
    <div class="qrcode-container p-4 w-full h-full flex flex-col">
        <div class="flex flex-col w-full overflow-hidden rounded-md border-gray-300 border-2">
            <div class="c-qrcode-header w-full bg-emerald-600 text-white font-bold py-2 px-4 flex justify-between"><span class="text-xs md:text-sm">MANAGE QRCODE</span><button id="add_qr" class="rounded-sm py-1 px-4 bg-green-800 text-xs md:text-sm"><i class="fa fa-plus-circle"></i> ADD IMAGE</button></div>
            <div class="container-qrcode-form p-2 w-full">
            <table id="myTable" class="display w-full">
                <thead>
                    <tr>
                        <th class="!w-16">Page #</th>
                        <th class="w-1/3">Image file name</th>
                        <th class="w-1/3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($qrCode as $data)
                    <tr>
                        <td class="w-1/3 text-center">page {{$loop->index + 1}}</td>
                        <td class="w-1/3"><img src="{{ asset('storage/qr_images/' . $data['filename']) }}" class="min-h-[90px] max-h-[90px]" loading="lazy" alt="qr-image" data-image-id="{{$data['id']}}"></td>
                        <td class="w-1/3 text-center">
                            <button id="edit-qr" onclick="editQr(this)" data-edit-qr="{{$data['id']}}"  class="btn-edit bg-emerald-600 py-2  min-w-[56px] rounded-sm text-white text-xs m-2">edit</button>
                            <a id="delete-qr" onclick="deleteItem({{$data['id']}})" class="btn-delete bg-red-600 py-2 px-[14px] min-w-[56px] rounded-sm text-white text-xs m-2">delete</button>
                        </td>
                    </tr>
                    @endforeach
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <section class="add fixed  flex items-center justify-center w-full h-full bg-black/75 top-0 left-0 hidden">
        <div class="container-add-image max-w-max h-auto bg-white p-4 flex flex-col items-center justify-center rounded-md">
        <form action="{{ route('qrcode.store') }}" enctype="multipart/form-data" method="POST" id="dynamic_form">
                @csrf
                <div class="qr-image flex items-center justify-center">
                    <img src="{{asset('images/placeholder-image.png')}}" class="w-52 m-0 p-0"  id="imagePreview" loading="lazy" alt="image placeholder">
                </div>
                <div class="container-input flex-col flex items-start justify-start mt-4">
                    <input type="file" name="qr_image" id="qr_image" required>
                    <small id="error_msg" class="mt-3">Select image file</small>
                </div>
                <div class="action-container flex items-center justify-between mt-4">
                    <button id="accept" class="bg-emerald-600 rounded-sm px-4 py-1 text-white hover:bg-emerald-300">Save</button>
                    <span onclick="closePopup()" id="cancel" class="rounded-sm bordered border-slate-600 border px-4 py-1 cursor-pointer">Cancel</span>
                </div>
            </form>
        </div>
    </section>
</body>
<script src="{{ mix('js/app.js') }}"></script> 
<script>
        $(document).ready( function () {
             const dynamic_form = $('#dynamic_form');
            $('#myTable').DataTable({
                responsive: true
            });

            $('#add_qr').click(function(){
                    if($('#hidden_edit')){
                        $('#hidden_edit').remove();
                    }
                    $(dynamic_form).attr('action', "{{ route('qrcode.store') }}");
                    $('#qr_image').val('');
                    $('#imagePreview').attr('src',"{{asset('images/placeholder-image.png')}}");
                    $('section.add').removeClass('hidden');
            });
            $('#qr_image').change(function(){
                if (this.files && this.files[0]) {
                    var fileType = this.files[0].type;
                    if (fileType.startsWith('image/')) {
                        $('#error_msg').addClass('hidden');
                        readURL(this); // Call function to display the selected image
                    
                    } else {
                        $('#error_msg').text('Please select valid image file');
                        $('#error_msg').css('color','red');
                        $('#imageInput').val(''); // Clear the file input
                        $('#accept').attr('disabled','disabled');     
                    }
                }
            });
            
        });

    function editQr(e){
                let img_id = $(e).attr('data-edit-qr');
                let current_image = $('[data-image-id="'+img_id+'"').attr('src');
                $('#imagePreview').attr('src',current_image);
                $(dynamic_form).attr('action', "{{ route('qrcode.edit') }}");
                $('section.add').removeClass('hidden');
                $('.container-input').append(`<input type="hidden" id="hidden_edit" value="`+img_id+`" name="edit_qr_id"/>`);
    }   
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imagePreview').attr('src', e.target.result); // Set the image source
                $('#imagePreview').show(); // Show the image preview
            }
            reader.readAsDataURL(input.files[0]); // Read the image file
        }
    }
    function closePopup(){
        $('section.add').addClass('hidden');
        $('#qr_image').val('');
        $('#accept').removeAttr('disabled');
        $('#error_msg').text('Select image file');
    }
    function deleteItem(id) {
    if (confirm('Are you sure you want to delete this item?')) {
        fetch("{{ route('qrcode.delete', ['id' => ':id']) }}".replace(':id', id), {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token if required
                'Content-Type': 'application/json'
            }
        })
        .then(response => {
            if (response.ok) {
                // Optionally, you can handle successful deletion here
                console.log('Item deleted successfully');
                // Redirect to a different page if needed
                window.location.href = "{{ route('qrcode.index') }}";
            } else {
                console.error('Error deleting item');
                // Handle error cases if needed
            }
        })
        .catch(error => {
            console.error('Network error:', error);
            // Handle network errors or exceptions
        });
    } else {
        //delete canceled
    }
}


    </script>
</html>