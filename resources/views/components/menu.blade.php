<nav class="w-full">
    <div id="mobile-menu" class="overflow-y-scroll bg-white block w-screen h-screen absolute -translate-x-full top-0 md:hidden z-40 transition-all ease-in-out duration-200">
        <div class="w-1/2 m-auto pt-16 mobile-menu">
            <div><a href="{{ route('home.show') }}" class="mb-5">Home</a></div>
            <div class="mobile-submenu">
                <a class="cursor-pointer">About <em class="fa fa-chevron-down" aria-hidden="true"></em></a>
                <div class="mobile-submenu-content">
                    <a href="{{ route('school-profile.show') }}" class="block">School Profile</a>
                    <a href="{{ route('virtual-tour.show') }}" class="block">Virtual Tour</a>
                    <a href="{{ route('contact-us.show') }}" class="block">Contact Us</a>
                </div>
            </div>
            <div class="mobile-submenu">
                <a class="cursor-pointer">Programs <em class="fa fa-chevron-down" aria-hidden="true"></em></a>
                <div class="mobile-submenu-content">
                    <a href="#" class="block">Pre-elementary</a>
                    <a href="#" class="block">Elementary</a>
                    <a href="#" class="block">Junior HS</a>
                    <a href="#" class="block">Senior HS</a>
                    <a href="#" class="block">College</a>
                    <a href="#" class="block">TESDA</a>
                </div>
            </div>
            <div class="mobile-submenu">
                <a class="cursor-pointer">Admission <em class="fa fa-chevron-down" aria-hidden="true"></em></a>
                <div class="mobile-submenu-content">
                    <a href="#" class="block">Enrollment Process</a>
                    <a href="#" class="block">Requirements</a>
                </div>
            </div>
            <div><a href="{{ route('home.show') }}">FAQ</a></div>
        </div>
    </div>
    <div class="w-full xl:w-11/12 m-auto flex bg-white justify-between">
        <div class="p-2 flex flex-col justify-center">
            <div class="uppercase text-xs text-green-700">Programs Offered:</div>
            <div class="uppercase font-bold text-sm md:text-base text-gray-700">On-going Enrollment for S.Y. 2022-2023</div>
        </div>
        <div class="p-2 flex items-center justify-end">
            <div class="block text-right md:hidden cursor-pointer">
                <button type="button" id="menu-burger" class="z-50 transition-all ease-in-out duration-200">
                    <em class="fa-solid fa-bars text-3xl text-green-800"></em>
                </button>
            </div>
            <div class="nav-menu">
                <div><a href="{{ route('home.show') }}">Home</a></div>
                <div class="dropdown-menu">
                    <a class="cursor-pointer">About <em class="fa fa-chevron-down" aria-hidden="true"></em></a>
                    <div class="dropdown-content">
                        <a href="{{ route('school-profile.show') }}" class="block">School Profile</a>
                        <a href="{{ route('virtual-tour.show') }}" class="block">Virtual Tour</a>
                        <a href="{{ route('contact-us.show') }}" class="block">Contact Us</a>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <a class="cursor-pointer">Programs <em class="fa fa-chevron-down" aria-hidden="true"></em></a>
                    <div class="dropdown-content">
                        <a href="/pre-elementary" class="block">Pre-elementary</a>
                        <a href="/elementary" class="block">Elementary</a>
                        <a href="/junior-hs" class="block">Junior HS</a>
                        <a href="/shs" class="block">Senior HS</a>
                        <a href="/college" class="block">College</a>
                        <a href="/tesda" class="block">TESDA</a>
                    </div>
                </div>
                <div class="dropdown-menu">
                    <a class="cursor-pointer">Admission <em class="fa fa-chevron-down" aria-hidden="true"></em></a>
                    <div class="dropdown-content">
                        <a href="#" class="block">Enrollment Process</a>
                        <a href="#" class="block">Requirements</a>
                    </div>
                </div>
                <div class="dropdown-menu"><a class="cursor-pointer" href="{{ route('home.show') }}">FAQ</a></div>
            </div>
        </div>
    </div>
    <div class="bg-gray-200 w-full h-px"></div>
    <div class="w-full bg-white border-b border-gray-200 drop-shadow-xl" style="position: relative; z-index: 1;">
        <div class="w-full xl:w-10/12 m-auto py-3 px-2 block md:flex items-center">
            <div class="flex-grow inline md:block float-left md:float-none">
                <img loading="lazy" src="{{asset('images/logo.webp')}}" class="w-16 md:w-40" alt="COLM Logo">
            </div>
            <div class="block text-right">
                <div>
                    <div class="mb-5">
                        <a href="{{ route('contact-us.show') }}" class="mr-3 text-lg bg-white hover:bg-green-700 hover:text-white hover:shadow-lg hover:shadow-color1 transition-all ease-in-out duration-200 border-2 border-green-700 text-green-700 font-bold px-5 py-2 rounded-full">Inquire <em class="fa fa-question-circle" aria-hidden="true"></em></a>
                        <a href="https://forms.gle/nyqjR9VA74VZ4bEUA" target="_blank" class="text-lg bg-yellow-600 shadow-lg shadow-color1 hover:bg-yellow-500 hover:border-yellow-500 transition-all ease-in-out duration-200 border-2 border-yellow-600 text-white font-bold px-5 py-2 rounded-full">Enroll <em class="fa-solid fa-chevron-right"></em></a>
                    </div>
                    <div class="grid grid-cols-6 py-2">
                        <div class="org-img"><img src="{{ asset('images/deped.webp') }}" alt="DepEd Logo"></div>
                        <div class="org-img"><img src="{{ asset('images/up.webp') }}" alt="UP Logo"></div>
                        <div class="org-img"><img src="{{ asset('images/ched.webp') }}" alt="CHED Logo"></div>
                        <div class="org-img"><img src="{{ asset('images/tesda.webp') }}" alt="TESDA Logo"></div>
                        <div class="org-img"><img src="{{ asset('images/pacu-logo.webp') }}" alt="PACU Logo"></div>
                        <div class="org-img"><img src="{{ asset('images/pacu1957.webp') }}" alt="PACU 1957 Logo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- <div id="menu" class="menu">
    <div class="bg-color2 rounded-b-3xl">
        <div class="float-left py-2 pl-6 text-green-700 italic">Programs Offered:</div>
        <div class="p-3 text-sm text-green-900 flex items-center justify-center font-bold announcement-text">
            <div class="announcement-text">
                ON-GOING ENROLLMENT FOR S.Y. 2022-2023
            </div>
        </div>
    </div>
    <div id="lower-menu" class="rounded-b-3xl shadow-lg">
        <div class="grid grid-cols-12 w-12/12 xl:w-10/12 mx-auto px-4 lg:px-0 py-2">
            <div class="col-span-3 lg:col-span-2 flex items-center justify-start">
                <img loading="lazy" src="{{asset('images/logo.webp')}}" id="menu-logo" alt="COLM Logo">
                <div class="ml-2 font-bold text-2xl ff-cgb text-green-800">
                    <div>COLM</div>
                </div>
            </div>
            <div class="col-span-9 lg:col-span-9 p-2 flex items-center justify-end">
                <div class="flex flex-col">
                    <input class="hidden" type="checkbox" name="burger-drawer" id="burger-drawer">
                    <div id="top-logo" class="absolute scale-0 transition-all ease-in-out duration-300 md:scale-100 md:relative md:flex justify-end md:mb-3 border-b border-gray-300">
                        <div class="grid grid-cols-6 py-2 mb-3">
                            <div class="org-img"><img src="{{ asset('images/deped.webp') }}" alt="DepEd Logo"></div>
                            <div class="org-img"><img src="{{ asset('images/up.webp') }}" alt="UP Logo"></div>
                            <div class="org-img"><img src="{{ asset('images/ched.webp') }}" alt="CHED Logo"></div>
                            <div class="org-img"><img src="{{ asset('images/tesda.webp') }}" alt="TESDA Logo"></div>
                            <div class="org-img"><img src="{{ asset('images/pacu-logo.webp') }}" alt="PACU Logo"></div>
                            <div class="org-img"><img src="{{ asset('images/pacu1957.webp') }}" alt="PACU 1957 Logo"></div>
                        </div>
                    </div>
                    <div class="flex justify-end md:my-3">
                        <ul class="menu-links">
                            <li class="inline">
                                <a href="{{ route('home.show') }}" class="reg-link">Home</a>
                            </li>
                            <li>
                                <div class="group inline">
                                    <a class="reg-link">About <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <div class="absolute mb-0 md:-mt-1 h-0 group-hover:h-auto bg-green-700 group-hover:p-3 transition-all ease-in-out duration-300 origin-top shadow-lg rounded-lg overflow-hidden">
                                        <div class="child-menu">
                                            <div><a href="{{ route('school-profile.show') }}" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">School Profile</a></div>
                                            <div><a href="{{ route('contact-us.show') }}" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Virtual Tour</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Contact Us</a></div>
                                        </div>
                                    </div>
                                </div>
                            <li>
                                <div class="group inline">
                                    <a class="reg-link">Programs <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <div class="absolute mb-0 md:-mt-1 h-0 group-hover:h-auto bg-green-700 group-hover:p-3 transition-all ease-in-out duration-300 origin-top shadow-lg rounded-lg overflow-hidden">
                                        <div class="child-menu">
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Pre-elem</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Elem</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Junior HS</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Senior HS</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">College</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">TESDA</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="group inline">
                                    <a class="reg-link">Admission <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                                    <div class="absolute mb-0 md:-mt-1 h-0 group-hover:h-auto bg-green-700 group-hover:p-3 transition-all ease-in-out duration-300 origin-top shadow-lg rounded-lg overflow-hidden">
                                        <div class="child-menu">
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Enrollment Process</a></div>
                                            <div><a href="" class="text-white hover:text-gray-300 transition-all ease-in-out duration-300">Requirements</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="reg-link" href="#">FAQs</a>
                            </li>
                            <li>
                                <a href="#" class="menu-btn"><span class="flex-grow">Inquire</span> <i class="fa fa-question-circle text-color1" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="menu-btn"><span class="flex-grow">Enroll</span> <i class="fa fa-file-text text-color1" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <label for="burger-drawer" class="block lg:hidden">
                            <div id="hamburger" class="group">
                                <div class="h-2 w-11 rounded-3xl bg-green-800 group-hover:bg-green-700 mb-1"></div>
                                <div class="h-2 w-11 rounded-3xl bg-green-800 group-hover:bg-green-700 mb-1"></div>
                                <div class="h-2 w-11 rounded-3xl bg-green-800 group-hover:bg-green-700"></div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <script>
    let menuBar = document.querySelector("#menu");
    let menuLogo = document.querySelector("#menu-logo");
    let lowerMenuBar = document.querySelector("#lower-menu");
    let covidDisclaimer = document.querySelector("#covid-disclaimer");
    window.addEventListener("scroll", (event) => {
        let scroll = this.scrollY;
        if (scroll >= 109) {
            menuBar.classList.add("menuSticky");
            covidDisclaimer.classList.add('hidden');
            menuLogo.classList.remove('w-full');
            menuLogo.classList.add('w-3/5');
        } else {
            menuBar.classList.remove("menuSticky");
            covidDisclaimer.classList.remove('hidden');
            menuLogo.classList.add('w-full');
            menuLogo.classList. remove('w-3/5');
        }
    });
</script> --}}
