<x-layout>

    @include('movies._translate-buttons')
    <div class="text-center flex flex-col items-center">
        <div alt="im" class="rounded-lg border h-386 w-700">
            <img src="/storage/{{ $quote->image }}" alt="{{ $quote->id }}" />
        </div>
        <p class="text-5xl mt-65 mb-114 text-white">"{{ $quote->body }}"</p>
        <a href="{{ route('movie.get', ['movie' => $quote->movie->id]) }}"
            class="text-5xl text-white underline">{{ $quote->movie->title }}</a>
    </div>

</x-layout>
