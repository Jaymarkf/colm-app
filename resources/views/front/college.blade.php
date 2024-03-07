
<x-layout>
<script type='text/javascript'>document.addEventListener('DOMContentLoaded', function () {window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);})</script>
    <x-slot name="title">
        Elementary
    </x-slot>

    <div class="section bg-white">

        <div class="bg-cover bg-center bg-no-repeat flex relative w-full text-center flex-col items-center justify-center md:flex-row">
            <div class="svg-animated w-full lg:w-[35%]">
            {!! file_get_contents(public_path('svg/college.svg')) !!}
            </div>
            <div class="container-svg-content w-full flex items-center justify-center flex-col pl-5 pr-5 lg:w-[35%]">
                <h1  data-aos-anchor-placement="top-center" style="font-family:'Copperplate Gothic Bold', Courier, monospace;" class="text-xl lg:text-3xl font-bold text-center drop-shadow">
                Elementary
                </h1>
                <div class="blurb-programs-title">
                    <span  class="drop-shadow-lg text-sm">“You have brains in your head. You have feet in your shoes. You can steer yourself any direction you choose. You’re on your own. And you know what you know. And YOU are the guy who’ll decide where to go. You’ll look up and down streets. Look ’em over with care. About some you will say, ‘I don’t choose to go there.’
With your head full of brains and your shoes full of feet, you’re too smart to go down any not-so-good street.” 
<br>
-Theodore Seuss Geisel</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-offers">
        <a class="col-img" href="{{asset('images/college/1.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/1.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/2.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/2.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/3.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/3.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/4.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/4.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/5.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/5.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/6.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/6.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/7.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/7.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/8.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/8.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/9.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/9.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/10.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/10.jpg')}}" loading="lazy" alt="image"/>
        </a>
        <a class="col-img" href="{{asset('images/college/11.jpg')}}">
            <img class="rounded-t-lg" src="{{asset('images/college/11.jpg')}}" loading="lazy" alt="image"/>
        </a>
    </div>
    <div class="testimonial-container my-10 flex items-center flex-col justify-center">
        <h2 class="text-center text-3xl font-bold">TESTIMONIALS</h2>
        <div class="container-testimonials max-w-3xl mt-5">
            <p class="text-lg text-center italic font-bold"><span class="left-quote">“</span>The covid 19 pandemic may have affected the interest of other students to open their books, I can say not the elementary department especially the preschool pupils. Despite of the unconventional learning delivery modalities under the new normal, the situation didn’t deter them to acquire skills in reading. CONGRATULATIONS to Ma’am Ann Roxas, their teacher, and to their respective parents.<span class="right-quote">”</span> -- reference: <a href="https://www.facebook.com/colmpulilan/posts/3730317647059674?ref=embed_post" target="_blank" class="text-sky-400 underline">facebook</a></p>  
        </div>
    </div>

</x-layout>
