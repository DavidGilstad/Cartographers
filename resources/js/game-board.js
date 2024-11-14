import $ from 'jquery';
import emptyImg from '../images/terrains/empty.png';

$(document).ready(() => {
    // mark a cell as the currently selected terrain
    $('.game-board-cell').click(function() {
        setTerrain($(this)[0]);
    })

    $('.terrain-select').click(function() {
        let value = $(this);
        value.prev().click();
    })

    function setTerrain(cell) {
        let $terrain = getSelectedTerrain();

        if (! $terrain) {
            return;
        }

        if ($terrain.value === cell.value) {
            // Set back to empty if already is set to the terrain. Allows easy toggling.
            cell.value = 'empty';
            cell.alt = `cell with terrain set to empty`
            cell.src = emptyImg
        } else {
            cell.value = $terrain.value;
            cell.alt = `cell with terrain set to ${$terrain.value}`
            cell.src = $terrain.src;
        }
    }

    function getSelectedTerrain() {
        return $('input[name="terrain-select-group"]:checked').next()[0];
    }
})
