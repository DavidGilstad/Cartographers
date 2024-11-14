@props(['val'])

<div class="flex justify-center items-center aspect-square border border-gray-300 hover:border-gray-400">

{{-- TODO: change to display none and use JS to select the radio button when an image is clicked, and then set opacity from 80 to 100 --}}

    <input class="opacity-0 peer" type="radio" name="terrain-type-select" value="{{ $val }}" />
    <span class="text-gray-500 peer-checked:text-white">{{ $slot }}</span>
</div>
