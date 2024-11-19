<?php

use Illuminate\Support\Facades\Route;

Route::get('/create-session', function () {
    Session::put("store_hash", "sample 2");
    Session::save();

    // dd(Session::get("store_hash"));

})->middleware('web');
