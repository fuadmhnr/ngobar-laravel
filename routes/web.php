<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    $nama = "Fuad Muhammad Nur";
    return view('about', ['nama' => $nama]);
});
