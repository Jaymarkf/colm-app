<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title . " | College of Our Lady of Mercy of Pulilan Foundation Inc." ?? "COLM | College of Our Lady of Mercy of Pulilan Foundation Inc." }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo.webp')}}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @include ('js-script.data-aos')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
</head >
<body>
    <x-menu />

    <div class="form-modal opacity-0 transition-all ease-in-out duration-300 fixed w-full h-screen top-0 left-0 flex items-center justify-center -z-10">
        <div class="modal-window scale-0 transition-all ease-in-out delay-300 duration-300 w-11/12 md:w-7/12 p-5 bg-white rounded-xl shadow shadow-black relative">
            <span class="absolute top-1 right-3 text-lg close-modal cursor-pointer"><em class="fa fa-times" aria-hidden="true"></em></span>
            <div class="grid grid-cols-1 md:grid-cols-12 mb-3">
                <div class="col-span-4 flex justify-center object-cover">
                    <img loading="lazy" src="{{asset('images/logo.webp')}}" class="w-1/2 md:w-full lg:w-9/12 object-contain mb-3 md:mb-0" alt="COLM Logo">
                </div>
                <div class="col-span-8 flex flex-col items-center justify-center">
                    <h2 class="text-lg md:text-2xl font-bold text-green-700 text-center">Ready to begin your journey with us? Click 'Online Application' below to get started!</h2>
                    <div class="flex item-center justify-center mt-8">
                        <a href="https://forms.gle/nyqjR9VA74VZ4bEUA" target="_blank" rel="noreferrer" class="border-2 border-yellow-500 text-yellow-500 font-bold rounded-xl transition-all ease-in-out duration-300 hover:bg-yellow-500 hover:text-white p-3"><i class="fa fa-user" aria-hidden="true"></i> Online Application</a>
                    </div>
                </div>
            </div>
            <div class="text-xs text-gray-500">
                <div class="uppercase font-bold mb-1">Data Privacy Consent</div>
                Data Privacy Consent By filling-up this for you agree with the Data Privacy Policy of College of Our Lady of Mercy (COLM) and the National Privacy Commission (NPC). Both personal and non-personal information may be collected from you for using this form. Rest assured that these data shall be kept safe and secured, and will not be shared with anyone except to designated personnel who will process the needed information only for facilitating smooth processing of documents. The collective information derived from this exercise will be useful for the improvement of implementing similar activities in the future.
            </div>
        </div>
    </div>

    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    {{-- <script defer>
        $('document').ready(function() {
            $('#hamburger').on('click', function() {
                $('body').toggleClass('overflow-hidden')
            });
        });
    </script> --}}
    <script defer>
        $('document').ready(function() {
            $('#menu-burger').on('click', function() {
                $('body').toggleClass('overflow-hidden')
                $('#mobile-menu').toggleClass('-translate-x-full');
                $('#menu-burger').toggleClass('absolute -translate-x-10');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            const currDate = new Date();
            const getDate = new Date(localStorage.getItem('modal-date'));

            if (getDate < currDate) {
                setTimeout(() => {
                    $('body').addClass('modal-open');
                    $('.form-modal').addClass('modal-show');
                    $('.modal-window').addClass('modal-window-show')
                }, 2000);
            }
        });

        $('.close-modal').on('click', function() {
            $('body').removeClass('modal-open');
            $('.form-modal').removeClass('modal-show');
            $('.modal-window').removeClass('modal-window-show')
            let currDate = new Date();
            currDate.setDate(currDate.getDate() + 7);
            localStorage.setItem('modal-date', currDate);
        });
    </script>

    <x-footer />
    @if (Request::path() == 'pre-elementary' OR 
     Request::path() == 'elementary' OR 
     Request::path() == 'junior-hs' OR 
     Request::path() == 'shs' OR 
     Request::path() == 'college' OR 
     Request::path() == 'tesda')
        <script>AOS.init();</script>
    @endif
</body>

</html>