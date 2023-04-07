<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div>
            <x-form.navigate route="{{ route('quotes.show') }}">
                {{ __('quotes.back') }}
            </x-form.navigate>
        </div>
        <div class="border p-8">
            <form method="POST" action="{{ route('quote.update', ['quote' => $quote->id]) }}" class="flex flex-col gap-6"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex flex-col gap-6">
                    <x-form.label name="{{ $quote->body }}">
                        {{ __('quotes.quote_en') }}
                    </x-form.label>
                    <x-form.input id="{{ $quote->body }}" name="body[en]" :value="old('body.en', $quote->getTranslation('body', 'en'))" />
                    <x-form.error msg="body.en" />
                    <x-form.label name="{{ $quote->body }}">
                        {{ __('quotes.quote_ka') }}
                    </x-form.label>
                    <x-form.input id="{{ $quote->body }}" name="body[ka]" :value="old('body.ka', $quote->getTranslation('body', 'ka'))" />
                    <x-form.error msg="body.ka" />
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col ">
                        <x-form.label name="image">
                            {{ __('quotes.image') }}
                        </x-form.label>
                        <div class="flex items-center">
                            <x-form.input id="image" name="image" :value="old('image', $quote->image)" type="file" />
                            <div class="border p-4 h-32 w-32">
                                <img class="object-contain h-24 w-24" src="/storage/{{ $quote->image }}" />
                            </div>
                        </div>
                        <x-form.error msg="image" />
                    </div>
                    <div class="flex flex-col mr-65">
                        <x-form.label name="movie_id">
                            {{ __('quotes.movie') }}
                        </x-form.label>
                        <select
                            class="mb-4 flex w-56  border-0 p-5 text-gray-900 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-2xl sm:leading-6 focus:outline-none h-16 overflow-scroll"
                            name="movie_id" id="movie_id">
                            @foreach ($movies as $movie)
                                <option class="text-xs " value="{{ $movie->id }}"
                                    {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}>
                                    {{ ucwords($movie->title) }}
                                </option>
                            @endforeach
                        </select>
                        <x-form.error msg="movie_id" />
                    </div>
                </div>
                <x-form.button>
                    {{ __('quotes.update') }}
                </x-form.button>
            </form>
        </div>

    </div>

    </div>
</x-adminLayout>
