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
    return view('home', ['titolo' => "Mattia's Blog"]);
})->name ('home');


Route::get('/chisono', function () {
    return view('chisono', ['descrizione'=> "Mattia Cursi è uno studente appassionato di informatica che sta perseguendo il suo sogno di diventare uno sviluppatore. Con dedizione e impegno, Mattia sta acquisendo le competenze e le conoscenze necessarie per eccellere nel campo dello sviluppo software. La sua determinazione lo guida attraverso un percorso di apprendimento continuo, spinto dalla passione per la creazione e l'innovazione nel mondo della tecnologia."]);
})->name('chisono');

Route::get("/articoli", function () {

        $articoli=[['articolo'=>'PlayStation 5', 'categoria'=>'Elettronica', 'descrizione'=>"La PlayStation 5 (PS5) è una console di gioco di ultima generazione sviluppata da Sony Interactive Entertainment. Lanciata nel novembre 2020, la PS5 offre prestazioni avanzate, grafica ad alta definizione, tempi di caricamento rapidi e una vasta gamma di giochi esclusivi. Con la sua architettura potente e le nuove funzionalità, la PS5 ha ridefinito l'esperienza di gioco per milioni di giocatori in tutto il mondo. Il prezzo è di 500€" ],
                   ['articolo'=>'Maglietta Gucci', 'categoria'=>'Abbigliamento', 'descrizione'=>"Una maglia generica di Gucci è un capo d'abbigliamento di lusso caratterizzato da tessuti pregiati, artigianato di alta qualità e il distintivo logo GG del marchio. Solitamente realizzata con materiali come cotone, lana o misto cachemire, una maglia Gucci può presentare dettagli distintivi come ricami, stampe iconiche o dettagli ricercati che riflettono lo stile sofisticato e l'artigianalità distintiva della maison italiana."],
                   ['articolo'=>'Martello', 'categoria'=>'Attrezzi', 'descrizione'=>"
                   Un martello in gomma è uno strumento da lavoro caratterizzato da una testa e un manico realizzati in gomma resistente. Questo tipo di martello è progettato per fornire un'azione di impatto controllata e delicata, ideale per lavori che richiedono la forza senza danneggiare le superfici sensibili. Grazie alla sua testa morbida e non dannosa, il martello in gomma è spesso utilizzato in settori come la falegnameria, la lavorazione del cuoio, l'artigianato e altri lavori che richiedono precisione e delicatezza."]];


    return view("articoli", ["titoloArticoli"=> "Questi sono i miei articoli", "articoli"=>$articoli], );
})->name('articoli');


Route::get('/articoli/{id}', function ($id) {
    $articoli=[['articolo'=>'PlayStation 5', 'categoria'=>'Elettronica', 'immagine'=>'https://gmedia.playstation.com/is/image/SIEPDC/ps5-product-thumbnail-01-en-14sep21?$facebook$', 'descrizione'=>"La PlayStation 5 (PS5) è una console di gioco di ultima generazione sviluppata da Sony Interactive Entertainment. Lanciata nel novembre 2020, la PS5 offre prestazioni avanzate, grafica ad alta definizione, tempi di caricamento rapidi e una vasta gamma di giochi esclusivi. Con la sua architettura potente e le nuove funzionalità, la PS5 ha ridefinito l'esperienza di gioco per milioni di giocatori in tutto il mondo. Il prezzo è di 500€" ],
    ['articolo'=>'Maglietta Gucci', 'categoria'=>'Abbigliamento', 'immagine'=>'https://media.gucci.com/style/DarkGray_Center_0_0_980x980/1686932239/565806_XJAZY_9037_001_100_0000_Light-T-shirt-con-stampa-Gucci-Blade.jpg', 'descrizione'=>"Una maglia generica di Gucci è un capo d'abbigliamento di lusso caratterizzato da tessuti pregiati, artigianato di alta qualità e il distintivo logo GG del marchio. Solitamente realizzata con materiali come cotone, lana o misto cachemire, una maglia Gucci può presentare dettagli distintivi come ricami, stampe iconiche o dettagli ricercati che riflettono lo stile sofisticato e l'artigianalità distintiva della maison italiana."],
    ['articolo'=>'Martello', 'categoria'=>'Attrezzi', 'immagine'=>'https://media.adeo.com/marketplace/MKP/85889084/2add8d3477dfcda36fde7e429f0e2aeb.jpeg?width=650&height=650&format=jpg&quality=80&fit=bounds', 'descrizione'=>"
    Un martello in gomma è uno strumento da lavoro caratterizzato da una testa e un manico realizzati in gomma resistente. Questo tipo di martello è progettato per fornire un'azione di impatto controllata e delicata, ideale per lavori che richiedono la forza senza danneggiare le superfici sensibili. Grazie alla sua testa morbida e non dannosa, il martello in gomma è spesso utilizzato in settori come la falegnameria, la lavorazione del cuoio, l'artigianato e altri lavori che richiedono precisione e delicatezza."]];
    
return view("articoli_dettaglio", ["titolo"=> "Dettaglio Articoli", "articoli"=>$articoli[$id]]);
})->name("articoli.dettaglio");