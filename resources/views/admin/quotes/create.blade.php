<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col align-start h-screen mt-64">
        <div class="mb-65">
            <a href="{{ route('dashboard') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">Back</a>
        </div>
        <div class="border p-8">
            <form class="flex flex-col gap-6" method="POST" action="{{ route('quote.store') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col">
                    <label class="text-3xl mb-2 " for="body">Quote</label>
                    <input
                        class="mb-4 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                        id="body" name="body" />
                    @error('body')
                        <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                    @enderror

                </div>
                <div class="flex ">

                    <div class="flex flex-col">
                        <label class="text-3xl mb-2 " for="image">Image</label>
                        <input
                            class="mb-4 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                            name="image" id="image" type="file" />
                        @error('image')
                            <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                        @enderror

                    </div>
                    <div class="flex flex-col">
                        <label class="text-3xl mb-2 " for="movie_id">Movie</label>
                        <select
                            class="mb-4 flex  border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none w-64 h-16 overflow-y-auto"
                            name="movie_id" id="movie_id">
                            @foreach ($movies as $movie)
                                <option class="h-4 text-sm" value="{{ $movie->id }}"
                                    {{ old('movie') == $movie->id ? 'selected' : '' }}>
                                    {{ ucwords($movie->title) }}
                                </option>
                            @endforeach
                        </select>
                        @error('movie_id')
                            <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary">Create</button>
            </form>
        </div>

    </div>
</x-adminLayout>
