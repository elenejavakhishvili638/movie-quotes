<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col items-start gap-32">
        <div class="flex gap-20">
            <x-form.navigate route="{{ route('movie.create') }}">
                {{ __('dashboard.add_movie') }}
            </x-form.navigate>
            <x-form.navigate route="{{ route('movies.show') }}">
                {{ __('dashboard.see_movies') }}
            </x-form.navigate>
        </div>
        <hr class="w-1000 border-1 border-primary" />
        <div class="flex gap-20">
            <x-form.navigate route="{{ route('quote.create') }}">
                {{ __('dashboard.add_quote') }}
            </x-form.navigate>
            <x-form.navigate route="{{ route('quotes.show') }}">
                {{ __('dashboard.see_quotes') }}
            </x-form.navigate>
        </div>
        <hr class="w-1000 border-1 border-primary" />
        <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()"
            class="bg-trans border-primary border  py-4 text-3xl px-6 rounded-md hover:bg-secondary ">
            {{ __('dashboard.logout') }}</a>
        <form id="logout-form" method="POST" action="/logout" class="hidden">
            @csrf
        </form>
</x-adminLayout>
