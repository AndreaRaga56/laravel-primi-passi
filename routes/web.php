<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nomePagina="HomePage";
    // return view('home', ["a" => $ciao, "b"=>1]);
    return view('home', compact("nomePagina"));
})->name("HomePage");

Route::get('/SecondaPagina', function () {
    $nomePagina="Pagina Due";
    // return view('home', ["a" => $ciao, "b"=>1]);
    return view('seconda', compact("nomePagina"));
})->name("2");

Route::get('/TerzaPagina', function () {
    $nomePagina="Pagina Tre";
    // return view('home', ["a" => $ciao, "b"=>1]);
    return view('terza', compact("nomePagina"));
})->name("3");
