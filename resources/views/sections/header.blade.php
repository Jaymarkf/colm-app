@include('js-script/jquery-plugins')
<header class="flex justify-center flex-col items-center text-center md:flex md:flex-row 2xl:py-4 xl:px-5 2xl:px-10 shadow-md mheader">
    <div class="py-5 xl:p-2 w-28 ">
        <img class="xl:w-4/5 2xl:w-full  2xl:m-0" loading="lazy" src="{{asset('storage/images/logo.png')}}">
    </div>
    <div class="flex flex-col justify-center sm:items-center sm:pl-2 w-full   md:justify-between md:flex-row">
            <h1 class="font-bold mb-4 text-xl xl:text-base sm:font-bold 2xl:text-2xl">College of Our Lady Of Mercy Of<br class="block md:hidden"> Pulilan Foundation. INC.</h1>
            <ul class="flex items-center hidden md:flex">
                <li class="li-header w-24 2xl:w-40">
                    <a href="#" class="hover:text-emerald-600 font-medium 2xl:text-xl" >About</a>
                </li>
                <li class="li-header w-24  2xl:w-40 ">
                    <a href="#" class="hover:text-emerald-600 font-medium 2xl:text-xl" >Programs</a>
                </li>
                <li class="li-header w-24 2xl:w-40 ">
                    <a href="#" class="hover:text-emerald-600 font-medium 2xl:text-xl" >Admission</a>
                </li>
                <li class="li-header w-24  2xl:w-40 ">
                    <a href="#" class="hover:text-emerald-600 font-medium 2xl:text-xl" >FAQs</a>
                </li>
                <li class="li-header  w-24 2xl:w-40 flex flex-col justify-center items-center">
                   <a href="#" class="mb-2 hover:text-emerald-600 font-bold 2xl:text-xl">Inquire Now</a>
                   <a href="#" class="mt-2  hover:text-emerald-600 font-bold 2xl:text-xl">Enroll Now</a>
                </li>
            </ul>
            <div class="p-4 space-y-2 bg-emerald-800 rounded shadow block  self-end mr-4 mb-4 md:hidden hm">
                <span class="block w-8 h-0.5 bg-gray-100 animate-pulse"></span>
                <span class="block w-8 h-0.5 bg-gray-100 animate-pulse"></span>
                <span class="block w-8 h-0.5 bg-gray-100 animate-pulse"></span>
            </div>
            <ul class="hidden hm-content md:hidden">
                <li class="my-4">
                    <a href="#" class="text-lg font-bold">About</a>
                </li>
                <li class="my-4">
                    <a href="#" class="text-lg font-bold"> Programs</a>
                </li>
                <li class="my-4">
                    <a href="#"class="text-lg font-bold">Admission</a>
                </li>
                <li class="my-4">
                    <a href="#" class="text-lg font-bold">FAQs</a>
                </li>
                <li class="my-4">
                    <a href="#" class="text-lg font-bold">Inquire Now</a>
                </li>
                <li class="my-4">
                    <a href="#" class="text-lg font-bold">Enroll Now</a>
                </li>
            </ul >
    </div>
</header>