<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 ml-18 mr-18 text-2xl flex flex-col h-screen mt-114">
        <div class="mb-6">
            <a href="{{ route('dashboard') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">{{ __('quotes.back') }}</a>
        </div>
        @if ($quotes->count())
            @foreach ($quotes as $quote)
                <div class="flex border">
                    <div class="w-3/4 p-8  bg-gray-100 flex justify-between">
                        <div class=" mr-6">
                            <p class="">
                                {{ ucwords($quote->body) }}
                            </p>
                        </div>
                    </div>
                    <div class="w-1/4 p-8 text-center flex justify-center items-center bg-trans border-l">
                        <a href="{{ route('quote.edit', ['quote' => $quote]) }}"
                            class="text-2xl hover:text-blue-600">{{ __('quotes.edit') }}
                        </a>
                    </div>
                    <div class="w-1/4 p-8 text-center flex justify-center items-center bg-trans border-l">
                        <form method="POST" action="{{ route('quote.destroy', ['quote' => $quote->id]) }}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-2xl text-red-400">{{ __('quotes.delete') }}</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div class="mt-6">
                {{ $quotes->links() }}
            </div>
        @else
            <p class="text-4xl text-center mt-82">{{ __('quotes.no_quotes') }}</p>
        @endif
    </div>
</x-adminLayout>
