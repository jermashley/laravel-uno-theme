<?php

Route::get('app.base', function(){
    return view('uno-theme::app.base');
})->name('base');

Route::get('app.navLinks', function (){
    return view('uno-theme::app.navLinks');
})->name('navLinks');