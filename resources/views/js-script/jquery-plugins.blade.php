<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.hm').click(function(){
                $('.hm-content').slideToggle();
        });

        $('.hdropdown').click(function(){
            $(this).siblings('.hdcontent').slideToggle("fast",function(){
                if($(this).prev().children('.fa').hasClass("caret-up")){
                    $(this).prev().children('.fa').removeClass("caret-up");
                    $(this).prev().children('.fa').addClass("caret-down");
                }else{
                    $(this).prev().children('.fa').removeClass("caret-down");
                    $(this).prev().children('.fa').addClass("caret-up");
                }
            });
        });
        
    });
</script>