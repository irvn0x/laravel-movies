@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
  {{-- Start Popular TV Shows --}}
  <div class="popular-tv">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Tv Shows</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @foreach ($popularTv as $tvshow)
      <x-tv-card :tvshow="$tvshow" />
      @endforeach
    </div>
  </div>
  {{-- End Popular TV Shows --}}

  {{-- Start - Top Rated TV Shows --}}
  <div class="popular-movies py-24">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated TV Shows</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @foreach ($topRatedTv as $tvshow)
      <x-tv-card :tvshow="$tvshow" />
      @endforeach
    </div>
  </div>
  {{-- End - Top Rated TV Shows --}}
</div>
@endsection