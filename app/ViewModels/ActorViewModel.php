<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorViewModel extends ViewModel
{
    public $actor;

    public function __construct($actor)
    {
        $this->actor = $actor;
    }

    public function actor()
    {
        return collect($this->actor)->merge([
            'profile_path' => $this->actor['profile_path']
                ? 'https://image.tmdb.org/t/p/w300/' . $this->actor['profile_path']
                : 'https://via.placeholder.com/300x450',
        ])->dump();
    }
}
