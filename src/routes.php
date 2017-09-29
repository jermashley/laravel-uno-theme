<?php

Route::get('app.base', function(){
    return view('laravel-uno-theme::app.base');
})->name('base');

Route::get('app.navLinks', function (){
    return view('laravel-uno-theme::app.navLinks');
})->name('navLinks');