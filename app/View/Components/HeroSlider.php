<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\CarouselBanner;

class HeroSlider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $temp = CarouselBanner::all();
        $banner_context = [];
        foreach ($temp as $val) {
            $banner_context['banner_image'][] = "/storage/images/carousel/" . $val->banner_name;
            $banner_context['banner_link'][] = $val->banner_link;
            $banner_context['banner_link_blurb'][] = $val->banner_link_blurb;
            $banner_context['banner_blurb'][] = $val->banner_blurb;
            if ($val->banner_link == "" && $val->banner_link_blurb == "" && $val->banner_blurb == "") {
                $banner_context['banner_flag'][] = 'hide';
            } else {
                $banner_context['banner_flag'][] = 'show';
            }
        }

        return view('components.hero-slider')->with('banner_context', $temp);
    }
}
