@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-gray-800">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <img src="/img/oppenheimer.jpg" alt="oppenheimer" class="md:w-96 rounded-lg">
    <div class="md:ml-24">
      <h2 class="text-4xl font-semibold">Oppenheimer (2023)</h2>
      <div class="flex items-center text-gray-400 text-sm mt-1">
        <span class="bg-teal-200 rounded-full px-2 font-semibold tracking-wide text-black">13+</span>
        <span class="mx-2">•</span>
        <span>⭐</span>
        <span class="ml-1">85%</span>
        <span class="mx-2">•</span>
        <span>July 11, 2023</span>
        <span class="mx-2">•</span>
        <span>Biography, Drama, History</span>
        <span class="mx-2">•</span>
        <span>3h 1m</span>
      </div>

      {{-- Start Tagline --}}
      <div class="mt-10">
        <h4 class="text-gray-400 font-semibold italic">The world forever changes.</h4>
      </div>
      {{-- End Tagline --}}

      {{-- Start Overview --}}
      <div class="mt-10">
        <h4 class="text-white font-semibold">Overview</h4>
        <div class="flex mt-4">
          <p class="text-gray-300 lg:text-justify">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui repellat non similique, numquam odio quis
            dolor
            vitae aspernatur assumenda consectetur architecto? Praesentium nostrum nihil eaque ad dolorem ullam,
            laboriosam
            corrupti!
          </p>
        </div>
      </div>
      {{-- End Overview --}}

      {{-- Start Featured Cast --}}
      <div class="mt-10">
        <h4 class="text-white font-semibold">Featured Cast</h4>
        <div class="flex mt-4">
          <div>
            <div>Christopher Nolan</div>
            <div class="text-sm text-gray-400">Director</div>
          </div>
          <div class="ml-8">
            <div>Christopher Nolan</div>
            <div class="text-sm text-gray-400">Writer</div>
          </div>
        </div>
      </div>
      {{-- End Featured Cast --}}

      {{-- Start Button Trailer --}}
      <div class="mt-10">
        <button
          class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="1.5" class="w-6 h-6"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 0 1 0 1.971l-11.54 6.347a1.125 1.125 0 0 1-1.667-.985V5.653z" />
          </svg>
          <span class="ml-2">Play Trailer</span>
        </button>
      </div>
      {{-- End Button Trailer --}}

    </div>
  </div>
</div>

{{-- Start Section Cast --}}
<div class="movie-cast border-b border-gray-800">
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-semibold">Top Billed Cast</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-10">
      <div class="mt-8">
        <img src="/img/cast-1.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">Cicilian Murphy</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <div class="text-gray-400 text-sm">
              J. Robert Oppenheimer
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <img src="/img/cast-2.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">Emily Blunt</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <div class="text-gray-400 text-sm">
              Kitty Oppenheimer
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <img src="/img/cast-3.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">Matt Demon</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <div class="text-gray-400 text-sm">
              Leslie Groves
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <img src="/img/cast-4.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">Robert Downey Jr.</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <div class="text-gray-400 text-sm">
              Lewis Strauss
            </div>
          </div>
        </div>
      </div>
      <div class="mt-8">
        <img src="/img/cast-5.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
        <div class="mt-2">
          <a href="" class="text-lg mt-2 hover:text-gray-300">Florence Pugh</a>
          <div class="flex items-center text-gray-400 text-sm mt-1">
            <div class="text-gray-400 text-sm">
              Jean Tatlock
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Section Cast --}}

{{-- Start Media Cast --}}
<div class="media border-b border-gray-800">
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-semibold">Media</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-10">
      <div class="mt-8">
        <img src="/img/image-1.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
      </div>
      <div class="mt-8">
        <img src="/img/image-2.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
      </div>
      <div class="mt-8">
        <img src="/img/image-3.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
      </div>
      <div class="mt-1">
        <img src="/img/image-4.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
      </div>
      <div class="mt-1">
        <img src="/img/image-5.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
      </div>
      <div class="mt-1">
        <img src="/img/image-6.jpg" alt="" class="rounded-lg hover:opacity-75 transition ease-in-out duration-150">
      </div>
    </div>
  </div>
</div>
{{-- End Section Cast --}}
@endsection