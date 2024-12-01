<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class cardvid2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $videos;
    public $playlists;
    public function __construct($videos, $playlists)
    {
        $this->videos = $videos;
        $this->playlists = $playlists;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cardvid2');
    }
}
