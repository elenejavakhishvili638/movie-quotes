<x-layout>
    @include('movies._translate-buttons')

    <div class="w-800 text-2xl flex flex-col h-screen mt-114">
        <div>
            <a href="/dashboard"
                class="mb-6 p-5 justify-center rounded-md bg-primary px-12 font-semibold text-2xl text-white hover:bg-secondary">Back</a>
        </div>
        @foreach ($movies as $movie)
            <div class="flex border">
                <div class="w-3/4 p-8  bg-gray-100">
                    <p>
                        {{ ucwords($movie->title) }}
                    </p>
                </div>
                <div class="w-1/4 p-8 text-center bg-trans border-l">
                    <a href="{{ route('movie.edit', ['movie' => $movie]) }}"
                        class="text-2xl text-blue-500 hover:text-blue-600">Edit
                    </a>
                </div>
                <div class="w-1/4 p-8 text-center bg-trans border-l">

                    <form method="POST" action="{{ route('movie.destroy', ['movie' => $movie->id]) }}">
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
