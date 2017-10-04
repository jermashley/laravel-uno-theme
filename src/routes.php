<?php

Route::get('app.base', function(){
    return view('uno-theme::app.base');
})->name('base');

Route::get('app.blog', function(){
    return view('uno-theme::app.blog');
})->name('blog');
