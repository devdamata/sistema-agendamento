<?php

use Illuminate\Support\Facades\Route;

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

/*
| Rotas sem controlador chamando direto a página, sem processamento de dados.
*/
Route::get('/', function () {
  return view('clientHome');
});
/*
| Rotas sem controlador chamando direto a página, sem processamento de dados.
*/


/*
| Rotas com controlador 
*/
Route::get('/teste',\App\Livewire\AppointmentsCalendar::class);
/*
| Rotas com controlador 
*/


/*
| Rotas TESTES
*/
Route::get('/home', function () {
  return view('welcome');
});
/*
| Rotas TESTES
*/