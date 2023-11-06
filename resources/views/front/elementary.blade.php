
<x-layout>
<script type='text/javascript'>document.addEventListener('DOMContentLoaded', function () {window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);})</script>
    <x-slot name="title">
        Elementary
    </x-slot>

    <div class="section bg-white">

        <div class="bg-cover bg-center bg-no-repeat flex relative w-full text-center flex-col items-center justify-center md:flex-row">
            <div class="svg-animated w-full lg:w-[35%]">
            {!! file_get_contents(public_path('svg/elementary.svg')) !!}
            </div>
            <div class="container-svg-content w-full flex items-center justify-center flex-col pl-5 pr-5 lg:w-[35%]">
                <h1  data-aos-anchor-placement="top-center" style="font-family:'Copperplate Gothic Bold', Courier, monospace;" class="text-xl lg:text-3xl font-bold text-center drop-shadow">
                Elementary
                </h1>
                <div class="blurb-programs-title">
                    <span class="block font-bold mb-4 text-sm">Your child will be in a low student-teacher ratio, ensuring their holistic development in a fun learning experience, in one of the best private schools in Bulacan.</span>
                    <span  class="drop-shadow-lg text-sm">Primary education aims to develop spiritual, moral, mental and physical capabilities of pupils, provides them with experiences in the democratic way of life and inculcates ideas and attitudes necessary for enlightened, patriotic, upright and useful citizenship.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="programs-content mt-[50px]">
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 1</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 1 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 2</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 2 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
            <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 3</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 3 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
            <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 4</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 4 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
            <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 5</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 5 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
            <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 6</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 6 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="card-container" data-aos="fade-up" data-aos-anchor-placement="top-center">
            <a href="#" class="pc-img-a">
                <img class="rounded-t-lg" src="{{asset('images/elem-1.jpg')}}" loading="lazy" alt="image"/>
            </a>
            <div class="p-5">
            <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elementary 7</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Elementary 7 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="container-programs-faculty bg-green-800 p-16">
            <h2 class="text-white md:text-4xl font-bold text-center mb-3">Elementary Faculty</h2>
            <span class="text-md text-white text-center max-w-lg block mx-auto">We take pride in our academic excellence, but more importantly in nurturing each one’s compassion and drive to make a difference.It is our honor fostering next-generation leaders.</span>

            <div class="flex flex-wrap gap-y-4 gap-x-4 justify-center items-start">            
                <div class="container-flex-faculty mt-10 lg:w-[19%]">
                    <div class="card-container max-w-sm bg-white rounded-md overflow-hidden">
                        <a class="teacher-profile-img">
                            <img class="main-teacher-image md:w-96 h-full" src="{{asset('images/teachers/Flores-SJ.jpg')}}" loading="lazy" alt="image"/>
                        </a>
                        <div class="p-5">
                            <h5 class="text-slate-400 mb-2 text-2xl font-bold text-center">Samantha Flores</h5>
                            <p class="text-green-600 text-center">Bachelor of Arts in Communication ; LET Passer</p>
                            <p class="text-center mt-6 font-normal text-green-800 italic">“If a child can’t learn the way we teach, maybe we should teach the way they learn.” -Ignacio Estrada</p>
                            <div class="container-container-teacher mt-4 flex flex-col items-center justify-center">
                                <span class="block text-gray-500 text-center">Get in touch</span>
                            <div class="container-social-media-teacher flex items-center justify-center gap-x-4 pt-3">
                                <a href="https://facebook.com" class="text-4xl"><i class="fab fa-facebook-square text-blue-600"></i></a>
                                <a href="https://instagram.com" class="text-4xl"><i class="fab fa-instagram text-purple-400"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-flex-faculty mt-10 lg:w-[19%]">
                    <div class="card-container max-w-sm bg-white rounded-md overflow-hidden">
                        <a class="teacher-profile-img">
                            <img class="main-teacher-image md:w-96 h-full" src="{{asset('images/teachers/Ramos-AP.jpg')}}" loading="lazy" alt="image"/>
                        </a>
                        <div class="p-5">
                            <h5 class="text-slate-400 mb-2 text-2xl font-bold text-center">Allan Ramos</h5>
                            <p class="text-green-600 text-center">BS Education Major in English Minor in Mandarin ; LET Passer ; Test of English for International Communication Passer (TOEIC)</p>
                            <p class="text-center mt-6 font-normal text-green-800 italic">“Perseverance transcends intelligence.”</p>
                            <div class="container-container-teacher mt-4 flex flex-col items-center justify-center">
                                <span class="block text-gray-500 text-center">Get in touch</span>
                            <div class="container-social-media-teacher flex items-center justify-center gap-x-4 pt-3">
                                <a href="https://facebook.com" class="text-4xl"><i class="fab fa-facebook-square text-blue-600"></i></a>
                                <a href="https://instagram.com" class="text-4xl"><i class="fab fa-instagram text-purple-400"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-flex-faculty mt-10 lg:w-[19%]">
                    <div class="card-container max-w-sm bg-white rounded-md overflow-hidden">
                        <a class="teacher-profile-img">
                            <img class="main-teacher-image md:w-96 h-full" src="{{asset('images/teachers/Torres-C.jpg')}}" loading="lazy" alt="image"/>
                        </a>
                        <div class="p-5">
                            <h5 class="text-slate-400 mb-2 text-2xl font-bold text-center">Cheenny Torres</h5>
                            <p class="text-green-600 text-center">Bachelor of Secondary Education</p>
                            <p class="text-center mt-6 font-normal text-green-800 italic">“It takes a big heart to help shape little minds.”</p>
                            <div class="container-container-teacher mt-4 flex flex-col items-center justify-center">
                                <span class="block text-gray-500 text-center">Get in touch</span>
                            <div class="container-social-media-teacher flex items-center justify-center gap-x-4 pt-3">
                                <a href="https://facebook.com" class="text-4xl"><i class="fab fa-facebook-square text-blue-600"></i></a>
                                <a href="https://instagram.com" class="text-4xl"><i class="fab fa-instagram text-purple-400"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-flex-faculty mt-10 lg:w-[19%]">
                    <div class="card-container max-w-sm bg-white rounded-md overflow-hidden">
                        <a class="teacher-profile-img">
                            <img class="main-teacher-image md:w-96 h-full" src="{{asset('images/teachers/Lampa-C.jpg')}}" loading="lazy" alt="image"/>
                        </a>
                        <div class="p-5">
                            <h5 class="text-slate-400 mb-2 text-2xl font-bold text-center">Cowell Lampa</h5>
                            <p class="text-green-600 text-center">Bachelor of Secondary Education Major in MAPEH ; TESDA Achievements</p>
                            <p class="text-center mt-6 font-normal text-green-800 italic">“Everyday is a new beginning. Take a deep breath. Smile and start again.”</p>
                            <div class="container-container-teacher mt-4 flex flex-col items-center justify-center">
                                <span class="block text-gray-500 text-center">Get in touch</span>
                            <div class="container-social-media-teacher flex items-center justify-center gap-x-4 pt-3">
                                <a href="https://facebook.com" class="text-4xl"><i class="fab fa-facebook-square text-blue-600"></i></a>
                                <a href="https://instagram.com" class="text-4xl"><i class="fab fa-instagram text-purple-400"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-flex-faculty mt-10 lg:w-[19%]">
                    <div class="card-container max-w-sm bg-white rounded-md overflow-hidden">
                        <a class="teacher-profile-img">
                            <img class="main-teacher-image md:w-96 h-full" src="{{asset('images/teachers/Segarra-KW.jpg')}}" loading="lazy" alt="image"/>
                        </a>
                        <div class="p-5">
                            <h5 class="text-slate-400 mb-2 text-2xl font-bold text-center">Kessle Segarra</h5>
                            <p class="text-green-600 text-center">Bachelor of Elementary Education ; LET Passer</p>
                            <p class="text-center mt-6 font-normal text-green-800 italic">“Your life is as good as your mindset. “</p>
                            <div class="container-container-teacher mt-4 flex flex-col items-center justify-center">
                                <span class="block text-gray-500 text-center">Get in touch</span>
                            <div class="container-social-media-teacher flex items-center justify-center gap-x-4 pt-3">
                                <a href="https://facebook.com" class="text-4xl"><i class="fab fa-facebook-square text-blue-600"></i></a>
                                <a href="https://instagram.com" class="text-4xl"><i class="fab fa-instagram text-purple-400"></i></a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="testimonial-container my-10 flex items-center flex-col justify-center">
        <h2 class="text-center text-3xl font-bold">TESTIMONIALS</h2>
        <div class="container-testimonials max-w-3xl mt-5">
            <p class="text-lg text-center"><span class="left-quote">“</span>The covid 19 pandemic may have affected the interest of other students to open their books, I can say not the elementary department especially the preschool pupils. Despite of the unconventional learning delivery modalities under the new normal, the situation didn’t deter them to acquire skills in reading. CONGRATULATIONS to Ma’am Ann Roxas, their teacher, and to their respective parents.<span class="right-quote">”</span></p>  
        </div>
    </div>
</x-layout>
