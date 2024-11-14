<x-layout>
    <div class="grid grid-cols-11 grid-rows-11">
        @foreach($cells as $row)
            @foreach($row as $cell)
                <x-game-board-cell terrain="empty" />
            @endforeach
        @endforeach
    </div>

    <div class="grid grid-cols-11 mt-10">
        {{--add blank cells to center terrain selects--}}
        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>

        @foreach(['water', 'village', 'forest', 'farm', 'monster'] as $terrain)
            <x-terrain-select terrain="{{ $terrain }}" />
        @endforeach

        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>
        <div class="hidden md:block"></div>
    </div>
</x-layout>
