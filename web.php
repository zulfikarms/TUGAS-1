<?php

use App\Models\Tugas1;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tugas1Controller;


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
    return view('welcome');
});

Route::get('/lat1', function() {
    echo "<h1> ini adalah lat 1 </h1>";

});

Route::get('/lat2', function () {
    return view('lat2');    
});

Route::get('/pertambahan/{a}/{b}', function($a,$b){
    $c=$a+$b;
    return view('pertambahan',["a"=>$a,"b"=>$b,"c"=>$c]);

});

Route::get('/Tugas1', [Tugas1Controller::class, 'index']);