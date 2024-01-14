<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('home'));

Route::get('/resume', fn () => response()->download('storage/CV-EN-WALLACE_ANDRADE_DA_SILVA.pdf'))
    ->name('resume');
