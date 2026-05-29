<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/', function () {

    $events = [
        (object) [
            'title' => 'Evento 1',
            'description' => 'Descrição do evento 1'
        ],
        (object) [
            'title' => 'Evento 2',
            'description' => 'Descrição do evento 2'
        ],
    ];

    return view('welcome', compact('events'));
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});


Route::get('/produtos', function (Request $request) {
    $search = $request->search;

    return view('produtos', ['search' => $search]);
});
