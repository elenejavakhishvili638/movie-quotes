<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div>
            <x-form.navigate route="{{ route('movies.show') }}">
                {{ __('movies.back') }}
            </x-form.navigate>
        </div>
        <div class="border p-8">
            <form class="flex flex-col gap-6" method="POST" action="{{ route('movie.update', ['movie' => $movie->id]) }}">
                @csrf
                @method('PATCH')
                <x-form.label name="{{ $movie->title }}">
                    {{ __('movies.title_en') }}
                </x-form.label>
                <div>
                    <x-form.input id="title" name="title[en]" :value="old('title.en', $movie->getTranslation('title', 'en'))" />
                    <x-form.error msg="title.en" />
                </div>
                <x-form.label name="{{ $movie->title }}">
                    {{ __('movies.title_ka') }}
                </x-form.label>
                <div>
                    <x-form.input id="title" name="title[ka]" :value="old('title.ka', $movie->getTranslation('title', 'ka'))" />
                    <x-form.error msg="title.ka" />
                </div>
                <x-form.button>
                    {{ __('movies.update') }}
                </x-form.button>
            </form>
        </div>

    </div>

</x-adminLayout>
