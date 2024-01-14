
<x-layout>

    <x-slot name="title">
        School Profile
    </x-slot>

    <div class="section bg-white">
        <div class="bg-cover bg-center bg-no-repeat flex relative w-full text-center flex-col items-center justify-center md:flex-row">
            <div class="svg-animated w-full lg:w-[35%]">
            {!! file_get_contents(public_path('svg/junior-hs.svg')) !!}
            </div>
            <div class="container-svg-content w-full flex items-center justify-center flex-col pl-5 pr-5 lg:w-[35%]">
                <h1  data-aos-anchor-placement="top-center" style="font-family:'Copperplate Gothic Bold', Courier, monospace;" class="text-xl lg:text-3xl font-bold text-center drop-shadow">
               Junior High School
                </h1>
                <div class="blurb-programs-title">
                    <span  class="drop-shadow-lg text-sm">The Junior High School Program aims to form integrated students who are imbued with Christian values coupled with a solid grounding on the 21st century skills in their academic formation. The program offers an array of curricular and co-curricular activities that respond to the challenges of an increasingly competitive, intellectual, and technological community. Christian values which are profusely infused in all subject areas are authenticated as students practice service to the community.</span>
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 1</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 1 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 2</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 2 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 3</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 3 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 4</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 4 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 5</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 5 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 6</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 6 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
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
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pre School 7</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pre School 7 Description Lorem upsim dolor amet dit dolor qit dotl qunatam tqun quantum</p>
                
                <a href="#" class="read-more inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
    <div class="testimonial-container my-10 flex items-center flex-col justify-center">
        <h2 class="text-center text-3xl font-bold">TESTIMONIALS</h2>
        <div class="container-testimonials max-w-3xl mt-5">
            <p class="text-lg text-center italic font-bold"><span class="left-quote">“</span>The covid 19 pandemic may have affected the interest of other students to open their books, I can say not the elementary department especially the preschool pupils. Despite of the unconventional learning delivery modalities under the new normal, the situation didn’t deter them to acquire skills in reading. CONGRATULATIONS to Ma’am Ann Roxas, their teacher, and to their respective parents.<span class="right-quote">”</span> -- reference: <a href="https://www.facebook.com/colmpulilan/posts/3730317647059674?ref=embed_post" target="_blank" class="text-sky-400 underline">facebook</a></p>  
        </div>
    </div>
</x-layout>
