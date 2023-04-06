<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="w-800 flex flex-col gap-16">
        <div>
            <a href="{{ route('dashboard') }}"
                class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary ">{{ __('movies.back') }}</a>
        </div>
        <div class="border p-8">
            <form class="flex flex-col gap-6" method="POST" action="{{ route('movie.store') }}">
                @csrf

                <label class="text-3xl mb-4 " for="title">{{ __('movies.title_en') }}</label>
                <div>
                    <input
                        class="mb-6 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-2xl sm:leading-6 focus:outline-none"
                        name="title[en]" id="title" />
                    @error('title.en')
                        <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                    @enderror
                </div>
                <label class="text-3xl mb-4 " for="title">{{ __('movies.title_ka') }}</label>
                <div>
                    <input
                        class="mb-6 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-2xl sm:leading-6 focus:outline-none"
                        name="title[ka]" id="title" />
                    @error('title.ka')
                        <p class="text-red-500 text-2xl mt-2"> {{ $message }}</p>
                    @enderror
                </div>


                <button type="submit"
                    class="bg-trans border-primary border py-4 text-3xl px-6 rounded-md hover:bg-secondary ">{{ __('movies.create') }}</button>
            </form>
        </div>
    </div>
</x-adminLayout>
