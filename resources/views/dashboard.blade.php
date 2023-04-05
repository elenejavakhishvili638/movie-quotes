<x-layout>
    @include('movies._translate-buttons')
    <div class="w-800 flex justify-between">
        <div class="mb-82">
            <a href="{{ route('movie.create') }}"
                class="bg-brown text-white py-4 text-2xl px-6 rounded-md hover:bg-secondary ">Add a
                new
                movie</a>
        </div>

        <div class="mb-82px">
            <a href="#" class="bg-brown text-white py-4 text-2xl px-6 rounded-md hover:bg-secondary ">Add a
                new
                Quote</a>
        </div>
        <div class="mb-82px">
            <a href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()"
                class="bg-brown text-white py-4 text-2xl px-6 rounded-md hover:bg-secondary ">
                Logout</a>
            <form id="logout-form" method="POST" action="/logout" class="hidden">
                @csrf

            </form>
        </div>
</x-layout>
