<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MailControll;

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

Route::get('/', [ PageController::class, 'homepage' ])->name ('home');


Route::get('/chisono', [PageController::class, 'chisono' ])->name('chisono');

Route::get("/articoli", [ArticleController::class, 'index'])->name('articoli');


Route::get('/articoli/{id}', [ArticleController::class, 'show'])->name("articoli.dettaglio"); 

Route::get('/articoli/categoria/{category?}', [ArticleController::class,'bycategory'])->name("articoli_categorie");

Route::get('/tickets', [MailControll::class, 'tickets'])->name('tickets');

Route::get('/ticket/{id}', [MailControll::class, 'show'])->name('ticket.show');

Route::post('ticket/answer', [MailControll::class, 'send'])->name('send.email');

Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');

Route::post('/article/store', [ArticleController::class,'store'])->name('article.store');
