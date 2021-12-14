<?php
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerPeneliti;


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
    // return view('peneliti.add_proposal');
});

Route::get('/klaster', 'App\Http\Controllers\ControllerPeneliti@api');
