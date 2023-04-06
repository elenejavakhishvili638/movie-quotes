<x-adminLayout>
    @include('movies._translate-buttons')
    <div class="flex min-h-full items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="flex flex-col w-500 space-y-10">
            <div class="mb-54">
                <h2 class="mt-6 text-center text-5xl font-bold text-primary">
                    {{ __('loginPage.sign_in_account') }}
                </h2>
            </div>
            <form class="mt-8 space-y-6" action="/login" method="POST">
                @csrf
                <input type="hidden" name="remeber" value="true" />
                <div class="-space-y-px rounded-md shadow-sm">
                    <div>
                        <label for="email-address" class="sr-only">{{ __('loginPage.email_address') }}</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="relative block w-full rounded-t-md border-0 p-6 text-gray-900 ring-1 ring-inset ring-primary placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                            placeholder="{{ __('loginPage.email_address') }}" />

                        @error('email')
                            <p class="text-red-500 text-2xl mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="sr-only">{{ __('loginPage.password') }}</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="relative block w-full rounded-b-md border-0 p-6 text-gray-900 ring-1 ring-inset ring-primary placeholder:text-gray-400 placeholder:text-lg  focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                            placeholder="{{ __('loginPage.password') }}">
                        @error('password')
                            <p class="text-red-500 text-2xl mt-2 mb-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class=" flex w-full justify-center rounded-md bg-trans border-primary border  px-3 py-4 font-semibold text-gray text-3xl hover:bg-secondary">
                        {{ __('loginPage.sign_in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-adminLayout>
