<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dsubcategories extends Component
{
    public $url, $img, $alt, $desc, $reg;
    /**
     * Create a new component instance.
     */
    public function __construct($href, $src, $alt, $desc, $reg)
    {
        $this->url = $href;
        $this->img = $src;
        $this->alt = $alt;
        $this->desc = $desc;
        $this->reg = $reg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dsubcategories');
    }
}
