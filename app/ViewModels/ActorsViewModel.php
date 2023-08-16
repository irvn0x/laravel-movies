<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;

class ActorsViewModel extends ViewModel
{
    public $popularActors;

    public function __construct($popularActors)
    {
        $this->popularActors = $popularActors;
    }

    public function popularActors()
    {
        return collect($this->popularActors)->map(function ($actor) {
            return collect($actor)->merge([
                'profile_path'   => $actor['profile_path']
                    ? 'https://www.themoviedb.org/t/p/w300_and_h450_face' . $actor['profile_path']
                    : 'https://ui.avatar.com/api/?size=300&name=' . $actor['name'],
                'known_for' => collect($actor['known_for'])->where('media_type', 'movie')->pluck('title')->union(
                    collect($actor['known_for'])->where('media_type', 'tv')->pluck('name')
                )->implode(', '),
            ])->dump();
        });
    }
}
