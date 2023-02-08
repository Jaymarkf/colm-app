<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? "COLM | College of Our Lady of Mercy of Pulilan Foundation Inc." }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('storage/images/logo.webp')}}">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <x-menu />

    <div class="modal opacity-0 transition-all ease-in-out duration-300 fixed w-full h-screen top-0 left-0 flex items-center justify-center -z-10">
        <div class="modal-window scale-0 transition-all ease-in-out delay-300 duration-300 w-11/12 md:w-7/12 p-5 bg-white rounded-xl shadow shadow-black relative">
            <span class="absolute top-1 right-3 text-lg close-modal cursor-pointer"><em class="fa fa-times" aria-hidden="true"></em></span>
            <div class="grid grid-cols-1 md:grid-cols-12">
                <div class="col-span-3 flex justify-center">
                    <img loading="lazy" src="{{asset('storage/images/logo.webp')}}" class="w-1/2 md:w-full mb-3 md:mb-0" alt="COLM Logo">
                </div>
                <div class="col-span-9">
                    <h2 class="text-lg md:text-3xl font-bold text-green-700 text-center">COLLEGE OF OUR LADY OF MERCY OF PULILAN FOUNDATION, INC.</h2>
                    <div class="flex item-center justify-center mt-8">
                        <a href="https://forms.gle/nyqjR9VA74VZ4bEUA" target="_blank" rel="noreferrer" class="border-2 border-yellow-500 text-yellow-500 font-bold rounded-xl transition-all ease-in-out duration-300 hover:bg-yellow-500 hover:text-white hover:border-white p-3"><i class="fa fa-user" aria-hidden="true"></i> Online Application</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ $slot }}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <script defer>
        $('document').ready(function() {
            $('#hamburger').on('click', function() {
                $('body').toggleClass('overflow-hidden')
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
                    $('.modal').addClass('modal-show');
                    $('.modal-window').addClass('modal-window-show')
                }, 2000);
            }
        });

        $('.close-modal').on('click', function() {
            $('body').removeClass('modal-open');
            $('.modal').removeClass('modal-show');
            let currDate = new Date();
            currDate.setDate(currDate.getDate() + 7);
            localStorage.setItem('modal-date', currDate);
        });
    </script>

    <x-footer />
</body>
</html>