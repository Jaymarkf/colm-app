
<div id="hero-slider" class="keen-slider hero-slider h-full">
    @foreach ($banner_context as $banner)
        <div class="keen-slider__slide bg-cover bg-center relative xs:!min-h-[300px] md:!min-h-[450px] lg:!min-h-[500px]" style="background-image: url('{{ asset('/images/carousel/' . $banner['banner_name']) }}');">
            <a href="{{ $banner['banner_link'] }}" target="_blank" rel="noreferrer">
                <div class="p-10 flex text-white shadow-lg w-full h-full bg-opacity-60 bg-black items-center justify-center">
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

<script src="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.js"></script>
<script>
function navigation(slider) {
    let wrapper, dots, arrowLeft, arrowRight

    function markup(remove) {
        wrapperMarkup(remove)
        dotMarkup(remove)
        arrowMarkup(remove)
    }

    function removeElement(elment) {
        elment.parentNode.removeChild(elment)
    }
    function createDiv(className) {
        var div = document.createElement("div")
        var classNames = className.split(" ")
        classNames.forEach((name) => div.classList.add(name))
        return div
    }

    function arrowMarkup(remove) {
        if (remove) {
            removeElement(arrowLeft)
            removeElement(arrowRight)
            return
        }
        arrowLeft = createDiv("arrow arrow--left")
        arrowLeft.addEventListener("click", () => slider.prev())
        arrowRight = createDiv("arrow arrow--right")
        arrowRight.addEventListener("click", () => slider.next())

        wrapper.appendChild(arrowLeft)
        wrapper.appendChild(arrowRight)
    }

    function wrapperMarkup(remove) {
        if (remove) {
        var parent = wrapper.parentNode
        while (wrapper.firstChild)
            parent.insertBefore(wrapper.firstChild, wrapper)
        removeElement(wrapper)
        return
        }
        wrapper = createDiv("navigation-wrapper")
        slider.container.parentNode.appendChild(wrapper)
        wrapper.appendChild(slider.container)
    }

    function dotMarkup(remove) {
        if (remove) {
            removeElement(dots)
            return
        }
        dots = createDiv("dots")
        slider.track.details.slides.forEach((_e, idx) => {
        var dot = createDiv("dot")
        dot.addEventListener("click", () => slider.moveToIdx(idx))
            dots.appendChild(dot)
        })
        wrapper.appendChild(dots)
    }

    function updateClasses() {
        var slide = slider.track.details.rel
        slide === 0
            ? arrowLeft.classList.add("arrow--disabled")
            : arrowLeft.classList.remove("arrow--disabled")
        slide === slider.track.details.slides.length - 1
            ? arrowRight.classList.add("arrow--disabled")
            : arrowRight.classList.remove("arrow--disabled")
        Array.from(dots.children).forEach(function (dot, idx) {
            idx === slide
                ? dot.classList.add("dot--active")
                : dot.classList.remove("dot--active")
        })
    }

    slider.on("created", () => {
        markup()
        updateClasses()
    })
    slider.on("optionsChanged", () => {
        console.log(2)
        markup(true)
        markup()
        updateClasses()
    })
    slider.on("slideChanged", () => {
        updateClasses()
    })
    slider.on("destroyed", () => {
        markup(true)
    })
    }
let slider = new KeenSlider('#hero-slider', {
    loop: true,
}, [navigation]);
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/keen-slider@latest/keen-slider.min.css">