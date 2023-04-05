<x-layout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div>
            <a href="/dashboard"
                class="mb-6 p-5 justify-center rounded-md bg-primary px-12 font-semibold text-2xl text-white hover:bg-secondary">Back</a>
        </div>
        <div class="border p-8">
            <form class="flex flex-col gap-6" method="POST" action="{{ route('movie.store') }}">
                @csrf
                <div class="flex flex-col">
                    <label class="text-2xl mb-2 text-white" for="title">Title</label>
                    <input
                        class="mb-6 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                        name="title" id="title" />
                    @error('title')
                        <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="mb-6 p-5 justify-center rounded-md bg-primary px-12 font-semibold text-2xl text-white hover:bg-secondary">Create</button>
            </form>
        </div>
    </div>
</x-layout>
