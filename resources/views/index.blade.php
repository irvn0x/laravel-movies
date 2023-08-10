@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
  {{-- Start Popular Movies --}}
  <div class="popular-movies">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movies</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @foreach ($popularMovies as $movie)
      <x-movie-card :movie="$movie" :genres="$genres" />
      @endforeach
    </div>
  </div>
  {{-- End Popular Movies --}}

  {{-- Start - Now Playing --}}
  <div class="popular-movies py-24">
    <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @foreach ($nowPlayingMovies as $movie)
      <x-movie-card :movie="$movie" :genres="$genres" />
      @endforeach
    </div>
  </div>
  {{-- End - Now Playing --}}
</div>
@endsection