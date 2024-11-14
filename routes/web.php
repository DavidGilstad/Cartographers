<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $cells = array_fill(0, 11, array_fill(0, 11, 0));

    return view('game-board', [
        'cells' => $cells,
    ]);
});
