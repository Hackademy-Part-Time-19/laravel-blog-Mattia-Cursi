<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['titolo' => 'Mattia Blog']);
});


Route::get('/chisono', function () {
    return view('chisono', ['descrizione'=> "Mattia Cursi è uno studente appassionato di informatica che sta perseguendo il suo sogno di diventare uno sviluppatore. Con dedizione e impegno, Mattia sta acquisendo le competenze e le conoscenze necessarie per eccellere nel campo dello sviluppo software. La sua determinazione lo guida attraverso un percorso di apprendimento continuo, spinto dalla passione per la creazione e l'innovazione nel mondo della tecnologia."]);
});

Route::get("/prodotti", function () {
    return view("prodotti", ["titoloProdotti"=> "Questi sono i miei prodotti"]);
});