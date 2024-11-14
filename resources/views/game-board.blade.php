<x-layout>
    <div class="grid grid-cols-11 grid-rows-11">
        @foreach($cells as $row)
            @foreach($row as $cell)
                <div class="flex justify-center items-center aspect-square border border-gray-300">
                    <button class="game-board-cell w-full h-full">
                        0
                    </button>
                </div>
            @endforeach
        @endforeach
    </div>

    <div class="grid grid-cols-11 mt-10">
        {{--add blank cells to center terrain selects--}}
        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>

        <x-terrain-type-button val="1">1</x-terrain-type-button>
        <x-terrain-type-button val="2">2</x-terrain-type-button>
        <x-terrain-type-button val="3">3</x-terrain-type-button>
        <x-terrain-type-button val="4">4</x-terrain-type-button>
        <x-terrain-type-button val="5">5</x-terrain-type-button>

        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>
    </div>
</x-layout>
