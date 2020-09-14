<?php

use App\Http\Livewire\JsonTool;
use App\Http\Livewire\UnserializeTool;
use App\Http\Livewire\XmlTool;
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
    return view('static.home');
});

Route::get('/tools/json', JsonTool::class)
    ->name('tools.json');

Route::get('/tools/xml', XmlTool::class)
    ->name('tools.xml');

Route::get('/tools/unserialize', UnserializeTool::class)
    ->name('tools.unserialize');