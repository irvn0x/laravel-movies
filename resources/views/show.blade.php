@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="oppenheimer"
      class="md:w-96 rounded-lg">
    <div class="md:ml-24">
      <h2 class="text-4xl font-semibold">{{ $movie['title'] }} (2023)</h2>
      <div class="flex items-center text-gray-400 text-sm mt-1">
        <span class="bg-teal-200 rounded-full px-2 font-semibold tracking-wide text-black">13+</span>
        <span class="mx-2">•</span>
        <span>⭐</span>
        <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
        <span class="mx-2">•</span>
        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        <span class="mx-2">•</span>
        <span>
          @foreach ($movie['genres'] as $genre)
          {{ $genre['name'] }} @if (!$loop->last), @endif
          @endforeach
        </span>
        <span class="mx-2">•</span>
        <span>3h 1m</span>
      </div>

      {{-- Start Tagline --}}
      <div class="mt-10">
        <h4 class="text-gray-400 font-semibold italic">{{ $movie['tagline'] }}</h4>
      </div>
      {{-- End Tagline --}}

      {{-- Start Overview --}}
      <div class="mt-10">
        <h4 class="text-white font-semibold">Overview</h4>
        <div class="flex mt-4">
          <p class="text-gray-300 lg:text-justify">
            {{ $movie['overview'] }}
          </p>
        </div>
      </div>
      {{-- End Overview --}}

      {{-- Start Featured Cast --}}
      <div class="mt-10">
        <h4 class="text-white font-semibold">Featured Cast</h4>
        <div class="flex mt-4">
          @foreach ($movie['credits']['crew'] as $crew)
          @if ($loop->index < 5) <div class="mr-8">
            <div>{{ $crew['name'] }}</div>
            <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
        </div>
        @endif
        @endforeach
      </div>
    </div>
    {{-- End Featured Cast --}}

    {{-- Start Button Trailer --}}
    <div x-data="{ isOpen: false }">
      @if (count($movie['videos']['results']) > 0)
      <div class="mt-10">
        <button @click="isOpen = true" href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}"
          class="inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 0 1 0 1.971l-11.54 6.347a1.125 1.125 0 0 1-1.667-.985V5.653z" />
          </svg>
          <span class="ml-2">Play Trailer</span>
        </button>
      </div>
      @endif
      {{-- End Button Trailer --}}

      {{-- Start Modal Button --}}
      <div style="background-color: rgba(0, 0, 0, .5);"
        class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto" x-show="isOpen">
        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
          <div class="bg-gray-900 rounded">
            <div class="flex justify-end pr-4 pt-2">
              <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">&times;</button>
            </div>
            <div class="modal-body px-8 py-8">
              <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full"
                  src="https://www.youtube.com/embed/D9oIu6jiYLk" style="border: 0;" allow="autoplay; encrypted-media"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- End Modal Button --}}
    </div>

  </div>
</div>
</div>

{{-- Start Section Cast --}}
<div class="movie-cast border-b border-gray-800">
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-semibold">Top Billed Cast</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      @foreach ($movie['credits']['cast'] as $cast)
      @if ($loop->index < 10) <div class="mt-8">
        <img src="{{ 'https://image.tmdb.org/t/p/w300/'.$cast['profile_path'] }}" alt="actor"
          class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <div class="text-gray-400 text-sm">
              {{ $cast['character'] }}
            </div>
          </div>
        </div>
    </div>
    @endif
    @endforeach
  </div>
</div>
</div>
{{-- End Section Cast --}}

{{-- Start Media Cast --}}
<div class="media border-b border-gray-800">
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-semibold">Media</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10">
      @foreach ($movie['images']['backdrops'] as $image)
      @if ($loop->index < 9) <div class="mt-8">
        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="image"
          class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
    </div>
    @endif
    @endforeach
  </div>
</div>
</div>
{{-- End Section Cast --}}
@endsection