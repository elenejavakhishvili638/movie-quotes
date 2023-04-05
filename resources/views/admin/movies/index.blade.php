<x-layout>
    @include('movies._translate-buttons')

    <div class="w-800 text-2xl flex flex-col h-screen mt-114">
        {{-- <div class="flex justify-between">
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
        </div> --}}
        @foreach ($movies as $movie)
            <div class="flex border">
                <div class="w-3/4 p-8  bg-gray-100">
                    <p>
                        {{ $movie->title }}
                    </p>
                </div>
                <div class="w-1/4 p-8 text-center bg-gray-200 border-l">
                    <a href="#" class="text-2xl text-blue-500 hover:text-blue-600">Edit
                    </a>
                </div>
                <div class="w-1/4 p-8 text-center bg-gray-200 border-l">

                    <form method="POST" action="{{ route('movie.destory', ['movie' => $movie->id]) }}">
                        @csrf
                        @method('DELETE')

                        <button class="text-2xl text-red-400">Delete</button>

                    </form>
                </div>
            </div>
        @endforeach
        <div class="mt-6">
            {{ $movies->links() }}
        </div>
    </div>
</x-layout>
