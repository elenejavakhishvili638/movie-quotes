<x-layout>
    @include('movies._translate-buttons')
    <div class="flex flex-col h-screen">
        <div class="mt-79 mb-82">
            <h1 class="text-white text-5xl">{{ ucwords($movie->title) }}</h1>
        </div>
        <div>
            @foreach ($movie->quotes as $quote)
                <div class="bg-white mb-67 rounded-lg w-748">
                    <img class="rounded-tl-lg rounded-tr-lg h-414 w-748 bg-primary" src="/storage/{{ $quote->image }}" />
                    <p class="pt-34 pb-45 text-4xl ml-18">{{ $quote->body }}</p>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
