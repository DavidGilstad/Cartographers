@props(['terrain'])

<div class="flex justify-center items-center aspect-square border border-gray-300 hover:border-gray-400">
    <input type="radio" name="terrain-select-group" class="peer hidden" value="{{ $terrain }}" />
    <input type="image"
           src="{{ Vite::asset("resources/images/terrains/$terrain.png") }}"
           alt="terrain select for {{ $terrain }}"
           class="terrain-select opacity-60 peer-checked:opacity-100 w-full h-full"
    />
</div>
