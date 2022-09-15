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
    return view('admin.homepage');
});

Route::get('/helloworld', function () { //navigazione con metodo get, scelgo a che url puntare.


    $data = [ "saluto" => "ciao", "nome" => "sono Ema" ];

    return view('HelloWorld', $data);  
    /*diciamo che questa linea è relativa alla navigazione interna
     tra cartelle in views. Di Fatto non potrò mai salire di livello,
     ma solo scendere usando la dot notation*/
});
