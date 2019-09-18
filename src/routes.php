<?php

use Illuminate\Support\Facades\Route;

Route::get('/frontend/file', function() {
    return response('Hello World!');
});