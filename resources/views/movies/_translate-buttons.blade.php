<div class="absolute w-58 left-0 ml-13.5">
    <div
        class="border-2 w-58 h-58 rounded-full mb-15 border-white flex justify-center items-center text-2xl {{ app()->getLocale() == 'en' ? 'bg-white text-gray-400' : 'text-white' }}">
        <form action="{{ route('setLanguage', 'en') }}" method="post">
            @csrf
            <input type="hidden" name="locale" value="en">
            <button class="pb-1" type="submit">en</button>
        </form>
    </div>
    <div
        class="border-2 w-58 h-58 rounded-full border-white flex justify-center items-center text-2xl {{ app()->getLocale() == 'ka' ? 'bg-white text-gray-400' : 'text-white' }}">
        <form action="{{ route('setLanguage', 'ka') }}" method="post" style="display: inline-block;">
            @csrf
            <input type="hidden" name="locale" value="ka">
            <button class="pb-1" type="submit">ka</button>
        </form>
    </div>
</div>
