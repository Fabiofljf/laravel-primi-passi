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

Route::get('/home', function () {
    $navBarr =[
            [
                'link' => 'Home',
                'href' => '/home'
            ],
            [
                'link' => 'Altrapagina',
                'href' => '/altrapagina'
            ]
        ];

        
    return view('home', compact('navBarr'));

});

Route::get('/altrapagina', function () {
    $navBarr =[
        [
            'link' => 'Home',
            'href' => '/home'
        ],
        [
            'link' => 'Altrapagina',
            'href' => '/altrapagina'
        ]
    ];
    return view('altrapagina', compact('navBarr'));
});
