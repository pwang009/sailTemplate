<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $subject = "hello!";
    return view('welcome');
});
