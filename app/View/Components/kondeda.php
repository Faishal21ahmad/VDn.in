<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class kondeda extends Component
{
    /**
     * Create a new component instance.
     */
    public $video;
    public $playlists;
    public function __construct($video, $playlists)
    {
        $this->video = $video;
        $this->playlists = $playlists;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.kondeda');
    }
}
