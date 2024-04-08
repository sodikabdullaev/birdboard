<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/projects', function () {
    App\Models\Project::create(request(['title', 'description']));
});
Route::get('/projects', function () {
    return  App\Models\Project::all();
});
