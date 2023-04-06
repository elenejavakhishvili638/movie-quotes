<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div class="">
            <a href="{{ route('movies.show') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">Back</a>
        </div>
        {{-- <div class="flex gap-11 w-screen items-center justify-center"> </div> --}}
        <div class="border p-8">
            <form method="POST" action="{{ route('movie.update', ['movie' => $movie->id]) }}" class="flex flex-col gap-6">
                @csrf
                @method('PATCH')
                <label class="text-3xl mb-2 " for="{{ $movie->title }}">Title En
                </label>
                <input
                    class="mb-6 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                    id="{{ $movie->title }}" name="title" value="{{ old('title', $movie->title) }}" />
                @error('title')
                    <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                @enderror
                <button class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">
                    Update
                </button>
            </form>
        </div>

    </div>

</x-adminLayout>
