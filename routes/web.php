<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/perfil/intereses', function () {
    return view('intereses');
});

Route::get('/perfil/habilidades', function () {
    return view('habilidades');
});


Route::get('/perfil/metas', function () {
    return view('metas');
});