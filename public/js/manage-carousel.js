$(document).ready(function(){
$('[hamburger]').click(function(){
     $('.content-nav-mobile').slideToggle();
});
$('.nav-account').click(function(){
 $('.nav-account-dropdown').slideToggle();
});
$('.file').change(function(){
 let image = document.getElementById('files').files[0];
 $('#image_flag').html(image.name);
 $(`  
 <div class="container-blurbs text-center mb-4 p-3 border rounded w-full sm:w-430px" style="margin-bottom:20px;">
         <section class="button_caption_row flex items-center justify-center mb-3">
             <input placeholder="Button caption" required name="button_caption" class="max-w-xs w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="button_caption" type="text">
             <span class="skip_btn bg-gray-400 px-2 py-1 text-white rounded ml-3 cursor-pointer hover:bg-gray-200" id="skip_button_caption" >skip</span>
         </section>
         <section class="button_link_row flex  items-center justify-center mb-3">
             <input placeholder="Button link url" required name="button_link" class="max-w-xs w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="button_link" type="text">
             <span class="skip_btn bg-gray-400 px-2 py-1 text-white rounded ml-3 cursor-pointer hover:bg-gray-200" id="skip_button_link">skip</span>
         </section>
         <section class="banner_blurb_row flex items-center justify-center flex-col">
             <textarea  required name="banner_blurb" id="banner_blurb" cols="47" rows="10" placeholder="Banner context.." class="w-full xs:w-auto shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
             <span class="skip_btn bg-gray-400 px-2 py-1 text-white rounded mt-3 cursor-pointer hover:bg-gray-200" id="skip_banner_blurb">skip</span>
         </section>
     </div>`).insertAfter('#image_flag');

     $('#skip_button_caption').click(function(){ 
     $('#button_caption').attr('disabled','disabled'); 
     $('#button_caption').css({'background-color':'#e9e9e9','cursor':'not-allowed'}); 
     $('#button_caption').val(''); 
     });

     $('#skip_button_link').click(function(){ 
     $('#button_link').attr('disabled','disabled'); 
     $('#button_link').css({'background-color':'#e9e9e9','cursor':'not-allowed'}); 
     $('#button_link').val(''); 
      });

     $('#skip_banner_blurb').click(function(){ 
     $('#banner_blurb').attr('disabled','disabled'); 
     $('#banner_blurb').css({'background-color':'#e9e9e9','cursor':'not-allowed'}); 
     $('#banner_blurb').val(''); 
     });
});
$('#cancel_new').click(function(){
 $('.file').val('');
 $('#image_flag').text('');
});

$('.btn_edit').on('click',function(){
    $.ajax({
        url:'admin',
        method:'post',
        dataType:'json',
        data:{ banner_id: $(this).attr('banner_id')},
        headers: {
            "X-CSRF-Token": document.querySelector('input[name=_token]').value
        }
    }).done(function(msg){
       if(msg.banner_name){
            $('#loading').addClass('hidden');
            $('[edit_form_content]').removeClass('hidden');
       }
    });
});

});
