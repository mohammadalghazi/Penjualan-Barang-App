<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dproducts extends Component
{
    public $url, $img, $alt, $stock, $reg, $exp, $desc;
    /**
     * Create a new component instance.
     */
    public function __construct($href, $src, $alt, $stock, $reg, $exp, $desc)
    {
        $this->url = $href;
        $this->img = $src;
        $this->alt = $alt;
        $this->stock = $stock;
        $this->reg = $reg;
        $this->exp = $exp;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dproducts');
    }
}
