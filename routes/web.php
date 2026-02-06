<?php

use Illuminate\Support\Facades\Route;

Route::get('/smarttools', function () {
    return view('index');
});
