<div class="modal-background fixed w-full bg-[#424242e2] z-10 p-5 h-full">
    <div class="modal-content bg-white mx-auto border rounded-lg px-5 py-7 relative">
        <div class="modal-header flex items-center justify-between w-full">
            <img class="w-24" loading="lazy" src="{{asset('storage/images/logo.webp')}}" alt="main_logo">
            <div class="titles">
                <p style="font-family:'Copperplate Gothic Bold';max-width:16rem;font-size:16px;">COLLEGE OF OUR LADY OF MERCY OF <br class="block md:hidden"> PULILAN FOUNDATION, INC.</p>
            </div>
            <span class="modal-close cursor-pointer hover:text-lime-500 mb-auto"><i class="fa fa-close"></i></span>   
        </div>
    
        <div class="modal-body flex flex-col items-center justify-center">
                <div class="row my-3">
                    <a href="https://forms.gle/nyqjR9VA74VZ4bEUA" class="flex items-center text-sm font-bold text-emerald-600" style="border: 1px solid green;padding: 4px 19px; border-radius: 9px;"><i class="fa fa-user mr-2"></i> ONLINE APPLICATION</a>
                </div>
        </div>
    </div>
    
</div>
<script>
    $('.modal-close').click(function(){
        $('.modal-background').fadeOut();
    });
</script>