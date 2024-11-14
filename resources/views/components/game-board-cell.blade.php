@props(['terrain'])

<div class="flex justify-center items-center aspect-square border border-gray-300">
    <input type="image"
           src="{{ Vite::asset("resources/images/terrains/$terrain.png") }}"
           value="{{ $terrain }}"
           alt="cell with terrain set to {{ $terrain }}"
           class="game-board-cell opacity-80 checked:opacity-100 w-full h-full"
    />
</div>
