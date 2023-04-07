<x-layout>

    @include('movies._translate-buttons')
    <div class="text-center flex flex-col items-center">
        @if ($quote)
            <div alt="im" class="rounded-lg border h-386 w-700">
                <img src="/storage/{{ $quote->image }}" class="h-386 w-700" alt="{{ $quote->id }}" />
            </div>
            <p class="text-5xl mt-65 mb-114 text-white">"{{ $quote->body }}"</p>
            <a href="{{ route('movie.get', ['movie' => $quote->movie->id]) }}"
                class="text-5xl text-white underline">{{ $quote->movie->title }}</a>
        @else
            <p class="text-4xl text-white text-center mt-82">{{ __('quotes.no_content') }}</p>
        @endif
    </div>

</x-layout>
