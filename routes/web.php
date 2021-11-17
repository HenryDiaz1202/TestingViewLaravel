<?php

use App\Models\Venta;
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

Route::resource('ventas','App\Http\Controllers\VentaController');

Route::get('/', function () {
    $ventas = Venta::query()->paginate(7);
    return view('welcome')->with('ventas',$ventas);;
});
