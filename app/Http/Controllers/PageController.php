<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('home', ['titolo' => "Mattia's Blog"]);
    }

    public function chisono(){
        return view('chisono', ['descrizione'=> "Mattia Cursi è uno studente appassionato di informatica che sta perseguendo il suo sogno di diventare uno sviluppatore. Con dedizione e impegno, Mattia sta acquisendo le competenze e le conoscenze necessarie per eccellere nel campo dello sviluppo software. La sua determinazione lo guida attraverso un percorso di apprendimento continuo, spinto dalla passione per la creazione e l'innovazione nel mondo della tecnologia."]);
    }
}
