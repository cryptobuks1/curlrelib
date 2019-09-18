<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel/frontend', function ($id) {
    response('Hello!');
});