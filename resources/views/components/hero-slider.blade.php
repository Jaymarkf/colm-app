<div class="main-container-slick px-8 md:px-[40px] lg:px-[60px] bg-black">
<div class="slick-slider-container">
    @foreach ($banner_context as $banner)
        <div class="hover:brightness-150 bg-contain bg-center relative h-[60vh] bg-no-repeat" style="background-image: url('{{ asset('/images/carousel/' . $banner['banner_name']) }}');">
            <a href="{{ $banner['banner_link'] }}" target="_blank" rel="noreferrer">
                <div class="p-10 flex text-white shadow-lg w-full h-full bg-opacity-40 bg-black items-center justify-center">
                    <div class="flex flex-col justify-center">
                        <div class="text-3xl font-bold mb-5 text-center">
                            {{ $banner['banner_link_blurb'] }}
                        </div>
                        <div class="max-w-3xl text-center">
                            {{ $banner['banner_blurb'] }}
                        </div>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
</div>
