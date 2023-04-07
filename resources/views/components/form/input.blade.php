 @props(['id', 'name', 'type' => 'text'])
 <input
     class="mb-6 flex w-full border-0 p-5 text-gray-900  placeholder:text-gray-400 placeholder:text-lg focus:ring-2 focus:ring-inset focus:ring-primary sm:text-2xl sm:leading-6 focus:outline-none"
     name="{{ $name }}" id="{{ $id }}" type="{{ $type }}"
     {{ $attributes(['value' => old($name)]) }} />
