<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div class="">
            <a href="{{ route('quotes.show') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">{{ __('quotes.back') }}</a>
        </div>

        <div class="border p-8">
            <form method="POST" action="{{ route('quote.update', ['quote' => $quote->id]) }}" class="flex flex-col gap-6"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="flex flex-col">

                    <label class="text-3xl mb-2 " for="{{ $quote->body }}">Quote En
                    </label>
                    <input
                        class="mb-6 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                        id="{{ $quote->body }}" name="body" value="{{ old('body', $quote->body) }}" />
                    @error('body')
                        <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-between">
                    <div class="flex flex-col ">
                        <label class="text-3xl mb-4" for="image">Image</label>
                        <div class="flex items-center">
                            <input
                                class="mb-4 flex  border-0  text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                                name="image" id="image" type="file" />
                            <div class="border p-4 h-32 w-32">
                                <img class="object-contain h-24 w-24" src="/storage/{{ $quote->image }}" />
                            </div>
                        </div>
                        @error('image')
                            <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                        @enderror


                    </div>
                    <div class="flex flex-col mr-65">
                        <label class="text-3xl mb-2 " for="movie_id">Movie</label>
                        <select
                            class="mb-4 flex w-full  border-0 p-5 text-gray-900 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none h-16 overflow-scroll"
                            name="movie_id" id="movie_id">
                            @foreach ($movies as $movie)
                                <option class="text-xs " value="{{ $movie->id }}"
                                    {{ old('movie_id', $quote->movie_id) == $movie->id ? 'selected' : '' }}>
                                    {{ ucwords($movie->title) }}
                                </option>
                            @endforeach
                        </select>
                        @error('movie_id')
                            <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">
                    {{ __('quotes.update') }}
                </button>
            </form>
        </div>

    </div>

    </div>
</x-adminLayout>
