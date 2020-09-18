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

Route::get('/', "GroupController@index")->name('home');
Route::resource('groups', GroupController::class)
    ->except([
        'index',
        'show',
    ]);
Route::resource('groups.tasks', TaskController::class)
    ->shallow()
    ->except([
        'show',
    ]);
Route::get('locale/{locale}', "LocalizationController@localize");
