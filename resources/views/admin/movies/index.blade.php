<x-adminLayout>
    @include('movies._translate-buttons')

    <div class="w-800 text-2xl flex flex-col h-screen  mt-114">
        <div class="mb-6">
            <a href="{{ route('dashboard') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">{{ __('movies.back') }}</a>
        </div>
        @foreach ($movies as $movie)
            <div class="flex border">
                <div class="w-3/4 p-8  bg-gray-100">
                    <p>
                        {{ ucwords($movie->title) }}
                    </p>
                </div>
                <div class="w-1/4 p-8 text-center flex justify-center items-center bg-trans border-l">
                    <a href="{{ route('movie.edit', ['movie' => $movie]) }}"
                        class="text-2xl  hover:text-blue-600">{{ __('movies.edit') }}
                    </a>
                </div>
                <div class="w-1/4 p-8 text-center flex justify-center items-center bg-trans border-l">

                    <form method="POST" action="{{ route('movie.destroy', ['movie' => $movie->id]) }}">
                        @csrf
                        @method('DELETE')

                        <button class="text-2xl text-red-400">{{ __('movies.delete') }}</button>

                    </form>
                </div>
            </div>
        @endforeach
        <div class="mt-6">
            {{ $movies->links() }}
        </div>
    </div>
</x-adminLayout>
