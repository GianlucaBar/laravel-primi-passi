<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'navData' => [
            [
                'linkName' => 'Contatti',
                'pgName' => 'contatti',
            ],
            [
                'linkName' => 'Info',
                'pgName' => 'info',
            ]
        ]

    ];
    return view('welcome', $data);
})->name('homepage');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/info', function () {
    return view('info');
})->name('info');
