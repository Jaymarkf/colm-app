
<x-layout>

    <x-slot name="title">
        College of Our Lady of Mercy of Pulilan Foundation Inc.
    </x-slot>
    
    <x-hero-slider />

    <div class="section">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-6 py-32">
                <div class="org-img"><img src="{{ asset('images/deped.webp') }}" class="bodyimg" alt="DepEd Logo"></div>
                <div class="org-img"><img src="{{ asset('images/up.webp') }}" class="bodyimg" alt="UP Logo"></div>
                <div class="org-img"><img src="{{ asset('images/ched.webp') }}" class="bodyimg" alt="CHED Logo"></div>
                <div class="org-img"><img src="{{ asset('images/tesda.webp') }}" class="bodyimg" alt="TESDA Logo"></div>
                <div class="org-img"><img src="{{ asset('images/pacu-logo.webp') }}" class="bodyimg" alt="PACU Logo"></div>
                <div class="org-img"><img src="{{ asset('images/pacu1957.webp') }}" class="bodyimg" alt="PACU Logo"></div>
            </div>
        </div>
    </div>

    <div class="my-5">
        @include('sections/event-calendar')
    </div>

    <div class="section mb-20">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-3 space-y-2 md:space-y-0 space-x-0 md:space-x-2">
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('https://placehold.co/600x400')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="text-lg text-green-700 font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipiscing elit.</div>
                        <div class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam blanditiis voluptatibus quidem quis dicta ipsam labore quo voluptates reprehenderit nostrum atque similique exercitationem excepturi optio, asperiores maxime et ipsum.
                        </div>
                        <div>
                            <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('https://placehold.co/600x400')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="text-lg text-green-700 font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipiscing elit.</div>
                        <div class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam blanditiis voluptatibus quidem quis dicta ipsam labore quo voluptates reprehenderit nostrum atque similique exercitationem excepturi optio, asperiores maxime et ipsum.
                        </div>
                        <div>
                            <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="rounded-lg shadow-xl">
                    <div style="background-image: url('https://placehold.co/600x400')" class="h-60 bg-cover bg-center rounded-t-lg">
                        
                    </div>
                    <div class="p-4">
                        <div class="text-lg text-green-700 font-bold mb-3">Lorem ipsum dolor sit amet consectetur adipiscing elit.</div>
                        <div class="text-sm mb-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nam blanditiis voluptatibus quidem quis dicta ipsam labore quo voluptates reprehenderit nostrum atque similique exercitationem excepturi optio, asperiores maxime et ipsum.
                        </div>
                        <div>
                            <a href="#" class="py-2 px-3 transition-all ease-in-out duration-300 bg-yellow-500 text-white border-2 border-white hover:bg-white hover:text-yellow-500 hover:border-yellow-500 text-sm rounded font-bold">Learn More <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
