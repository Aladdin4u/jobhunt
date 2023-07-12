<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => [
            [
                "id" => 1,
                "title" => 'listing one',
                'descriptions' => "loreum description ....",
                'position' => "back end"
            ],
            [
                "id" => 2,
                "title" => 'listing two',
                'descriptions' => "loreum description ....",
                'position' => "front end"
            ],
            [
                "id" => 3,
                "title" => 'listing three',
                'descriptions' => "loreum description ....",
                'position' => "senior front end"
            ],
        ]
    ]);
});