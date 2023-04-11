<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col align-start h-screen mt-64">
        <div class="mb-65">
            <x-form.navigate route="{{ route('dashboard') }}">
                {{ __('quotes.back') }}
            </x-form.navigate>
        </div>
        <div class="border p-8">
            <form class="flex flex-col gap-6" method="POST" action="{{ route('quote.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-6">
                    <x-form.label name="body">
                        {{ __('quotes.quote_en') }}
                    </x-form.label>
                    <x-form.input id="body" name="body[en]" />
                    <x-form.error msg="body.en" />
                    <x-form.label name="body">
                        {{ __('quotes.quote_ka') }}
                    </x-form.label>
                    <x-form.input id="body" name="body[ka]" />
                    <x-form.error msg="body.ka" />
                </div>
                <div class="flex ">
                    <div class="flex flex-col">
                        <x-form.label name="image">
                            {{ __('quotes.image') }}
                        </x-form.label>
                        <x-form.input id="image" name="image" type="file" />
                        <x-form.error msg="image" />
                    </div>
                </div>
                <div class="flex flex-col">
                    <x-form.label name="movie_id">
                        {{ __('quotes.movie') }}
                    </x-form.label>
                    <select
                        class="mb-4 flex w-full  border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-2xl sm:leading-6 focus:outline-none h-16 overflow-y-auto"
                        name="movie_id" id="movie_id">
                        @foreach ($movies as $movie)
                            <option class="h-4 text-sm" value="{{ $movie->id }}"
                                {{ old('movie') == $movie->id ? 'selected' : '' }}>
                                {{ ucwords($movie->title) }}
                            </option>
                        @endforeach
                    </select>
                    <x-form.error msg="movie_id" />
                </div>
                <x-form.button>
                    {{ __('quotes.create') }}
                </x-form.button>
            </form>
        </div>

    </div>
</x-adminLayout>
