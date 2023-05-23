
<x-layout>

    <x-slot name="title">
        Contact Us
    </x-slot>
    <div class="section bg-white">
        <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{asset('images/green-bg.jpg')}}')">
            <h1 style="font-family:'Copperplate Gothic Bold', Courier, monospace;" class="text-5xl font-bold text-white mb-3 text-center py-24 drop-shadow">
                Contact Us
            </h1>
        </div>
    </div>
    <div class="section bg-white">
        <div class="bg-cover bg-center bg-no-repeat">
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-9/12 m-auto py-24">
                <div>
                    <h2 class="text-3xl text-center md:text-left md:text-6xl font-bold uppercase text-gray-600">
                        Get in touch!
                    </h2>
                    <div>
                        <img src="{{ asset('images/call-image.png') }}" alt="Call us now!" />
                    </div>
                </div>
                <div class="p-5">
                    <h2 class="font-bold text-2xl uppercase text-gray-500"><i class="fa fa-phone" aria-hidden="true"></i> Contact Numbers</h2>
                    <div class="h-5 w-4/12 bg-color2 mt-5 rounded-3xl mb-5"></div>
                    <div class="text-gray-700 mb-10 text-lg">
                        <ul class="list-inside list-disc">
                            <li>(0917) 170-0766</li>
                            <li>(0968) 852-3185</li>
                            <li>(044) 230-2214</li>
                            <li>(044) 815-8642</li>
                            <li>(044) 760-7266</li>
                        </ul>
                    </div>
                    <h2 class="font-bold text-2xl uppercase text-gray-500"><i class="fa fa-building" aria-hidden="true"></i> COLM Main</h2>
                    <div class="h-5 w-4/12 bg-color2 mt-5 rounded-3xl mb-5"></div>
                    <div class="text-gray-700 mb-10 text-lg">
                        <p class="mb-5">
                            Old Cagayan Valley Road, Pulilan Bulacan
                        </p>
                        <p>
                            <a href="mailto:registrar@colm.edu.ph">registrar@colm.edu.ph</a>
                        </p>
                    </div>
                    <h2 class="font-bold text-2xl uppercase text-gray-500"><i class="fa fa-building" aria-hidden="true"></i> COLM Annex</h2>
                    <div class="h-5 w-4/12 bg-color2 mt-5 rounded-3xl mb-5"></div>
                    <div class="text-gray-700 mb-10 md:mb-5 text-lg">
                        <p class="mb-5">
                            88 Old Cagayan Valley Road, Pulilan 3005 Bulacan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
