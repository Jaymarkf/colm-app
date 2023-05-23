
<x-layout>

    <x-slot name="title">
        Virtual Tour
    </x-slot>

    <div class="section bg-white">
        <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('{{asset('images/green-bg.jpg')}}')">
            <h1 style="font-family:'Copperplate Gothic Bold', Courier, monospace;" class="text-5xl font-bold text-white mb-3 text-center py-24 drop-shadow">
                A Virtual Tour of Our Campus
            </h1>
        </div>
    </div>
    <div class="section">
        <div class="sectionInner">
            <div class="grid grid-cols-1 md:grid-cols-2 w-full md:w-9/12 m-auto pt-24">
                <div>
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fcolmpulilan%2Fvideos%2F440902903654688%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true" height="400px" class="w-full"></iframe>
                </div>
                <div class="p-5 text-lg">
                    <h2 class="font-bold text-2xl uppercase text-gray-500">We can't wait to see you soon COLMERS!</h2>
                    <div class="h-5 w-4/12 bg-color2 mt-5 rounded-3xl mb-5"></div>
                    <p class="text-gray-800">
                        We have enforced strict safety health protocols to ensure every corner of the campus is ready on your return. In the meantime, allow us to show you around your second home.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="sectionInner">
            <div class="w-full md:w-9/12 m-auto py-24">
                <h2 class="text-2xl text-gray-500 font-bold uppercase text-center mb-10">Ready to take the next step?</h2>
                <div class="text-center">
                    <a href="https://forms.gle/nyqjR9VA74VZ4bEUA" target="_blank" rel="noreferrer" class="px-5 py-3 text-2xl font-bold rounded-full bg-gradient-to-tr from-yellow-600 to-yellow-400 text-white hover:text-yellow-100 transition-all ease-in-out duration-200 shadow-lg hover:shadow-none">Submit your application now! <em class="fa-solid fa-chevron-right"></em></a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
