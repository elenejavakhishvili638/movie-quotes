<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col items-start gap-32">
        <div class="flex gap-20">
            <div class="">
                <a href="{{ route('movie.create') }}"
                    class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary ">{{ __('dashboard.add_movie') }}</a>
            </div>
            <div class="">
                <a href="{{ route('movies.show') }}"
                    class="bg-trans border-primary border  py-4 text-3xl px-6 rounded-md hover:bg-secondary ">
                    {{ __('dashboard.see_movies') }}</a>
            </div>
        </div>
        <hr class="w-1000 border-1 border-primary" />
        <div class="flex gap-20">

            <div class="">
                <a href="{{ route('quote.create') }}"
                    class="bg-trans border-primary border  py-4 text-3xl px-6 rounded-md hover:bg-secondary ">{{ __('dashboard.add_quote') }}</a>
            </div>
            <div class="">
                <a href="{{ route('quotes.show') }}"
                    class="bg-trans border-primary border  py-4 text-3xl px-6 rounded-md hover:bg-secondary ">{{ __('dashboard.see_quotes') }}</a>
            </div>

        </div>
        <hr class="w-1000 border-1 border-primary" />
        <div class="">
            <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()"
                class="bg-trans border-primary border  py-4 text-3xl px-6 rounded-md hover:bg-secondary ">
                {{ __('dashboard.logout') }}</a>
            <form id="logout-form" method="POST" action="/logout" class="hidden">
                @csrf

            </form>
        </div>
</x-adminLayout>
