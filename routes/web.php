<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; //Ho importato il controller
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
    return view('movies');
});
Route::get('/',[PageController::class, 'index']); // Utilizza il controller per visualizzare la vista
