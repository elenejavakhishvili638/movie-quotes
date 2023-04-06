<x-adminLayout>
    @include('movies._translate-buttons')

    <div class="w-800 ml-18 mr-18 text-2xl flex flex-col h-screen mt-114">
        <div class="mb-6">
            <a href="{{ route('dashboard') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">{{ __('quotes.back') }}</a>
        </div>
        @foreach ($quotes as $quote)
            <div class="flex border">
                <div class="w-3/4 p-8  bg-gray-100 flex justify-between">
                    <div class=" mr-6">
                        <p class="">
                            {{ ucwords($quote->body) }}
                        </p>
                    </div>
                    {{-- <img class="border h-14 w-14" src="{{ $quote->image }}" /> --}}
                </div>
                <div class="w-1/4 p-8 text-center bg-trans border-l">
                    <a href="{{ route('quote.edit', ['quote' => $quote]) }}"
                        class="text-2xl hover:text-blue-600">{{ __('quotes.edit') }}
                    </a>
                </div>
                <div class="w-1/4 p-8 text-center bg-trans border-l">

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
    </div>
</x-adminLayout>
