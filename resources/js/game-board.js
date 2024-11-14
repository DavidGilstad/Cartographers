import $ from 'jquery';

$(document).ready(() => {
    // mark a cell as the currently selected terrain
    $('.game-board-cell').click(function() {
        setTerrain($(this)[0]);
    })

    function getSelectedTerrain() {
        const $selectedTerrain = $('input[name="terrain-type-select"]:checked')[0];
        const value = $selectedTerrain?.value ?? 0;
        return parseInt(value);
    }

    function setTerrain(cell) {
        const terrain = getSelectedTerrain();

        if (terrain === parseInt(cell.textContent)) {
            // Set back to empty if already is set to the terrain. Allows easy toggling.
            cell.textContent = 0;
        } else {
            cell.textContent = terrain;
        }
    }
})
