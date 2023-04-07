<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div>
            <x-form.navigate route="{{ route('dashboard') }}">
                {{ __('movies.back') }}
            </x-form.navigate>
        </div>
        <div class="border p-8">
            <form class="flex flex-col gap-6" method="POST" action="{{ route('movie.store') }}">
                @csrf
                <x-form.label name="title">
                    {{ __('movies.title_en') }}
                </x-form.label>
                <div>
                    <x-form.input id="title" name="title[en]" />
                    <x-form.error msg="title.en" />
                </div>
                <x-form.label name="title">
                    {{ __('movies.title_ka') }}
                </x-form.label>
                <div>
                    <x-form.input id="title" name="title[ka]" />
                    <x-form.error msg="title.ka" />
                </div>
                <x-form.button>
                    {{ __('movies.create') }}
                </x-form.button>
            </form>
        </div>
    </div>
</x-adminLayout>
