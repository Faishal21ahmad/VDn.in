<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class editplaylist extends Component
{
    /**
     * Create a new component instance.
     */
    public $playlist;
    public function __construct($playlist)
    {
        $this->playlist = $playlist;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.editplaylist');
    }
}
