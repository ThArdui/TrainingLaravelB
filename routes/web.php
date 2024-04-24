<?php

use Illuminate\Support\Facades\Route;
Route::get('testcompo',function ()
{
    return view('componentest');
});

Route::post('/submit-velos', [VeloController::class, 'traiterForm'])->name('velos.submit');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/testmodel2', function ()
{
    return view('test2');
});
Route::get('/formulairetest', function ()
{
    return view('formulairetest');
});
Route::get('/accueil',function ()
{
    return view("testprimomodel");
});
