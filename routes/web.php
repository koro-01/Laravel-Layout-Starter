<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function(){
    return View::make('pages.home');
    });
    Route::get('contact', function(){
    return View::make('pages.contact');
    });
    Route::get('produit', function(){
    return View::make('pages.produit');
    });