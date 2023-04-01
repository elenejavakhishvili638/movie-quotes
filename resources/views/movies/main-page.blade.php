<x-layout>
    {{-- <div class="grid w-full">  </div> --}}
    @include('movies._translate-buttons')
    <div class="text-center flex flex-col items-center">
        @if (!$movie->quotes || !count($movie->quotes))
        @else
            <div alt="im" class="rounded-lg border h-386 w-700">image</div>
        @endif
        <a href="#" class="text-5xl mt-65 mb-114 text-white underline">{{ $movie->title }}</a>
        @if (!$movie->quotes || !count($movie->quotes))
            <p class="text-5xl text-white">No quote here</p>
        @else
            <p class="text-5xl text-white">"{{ $movie->quotes[0]->body }}"</p>
        @endif
    </div>

</x-layout>
