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

                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="w-full rounded-t-md border-0 p-6 text-gray-900 ring-1 ring-inset ring-primary placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                            placeholder="{{ __('loginPage.email_address') }}" />

                        <x-form.error msg="email" />
                    </div>
                    <div>

                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="w-full rounded-b-md border-0 p-6 text-gray-900 ring-1 ring-inset ring-primary placeholder:text-gray-400 placeholder:text-lg  focus:ring-2 focus:ring-inset focus:ring-primary sm:text-lg sm:leading-6 focus:outline-none"
                            placeholder="{{ __('loginPage.password') }}">
                        <x-form.error msg="password" />
                    </div>
                </div>
                <x-form.button>
                    {{ __('loginPage.sign_in') }}
                </x-form.button>

            </form>
        </div>
    </div>
</x-adminLayout>
