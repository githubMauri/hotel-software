<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Personal\empleadoComponent;
use App\Http\Livewire\Huesped\huespedComponent;
use App\Http\Livewire\Personal\RegistroEmpleadoComponent;
use App\Http\Livewire\Huesped\RegistroHuespedComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/empleado', empleadoComponent::class)->name('empleado');
Route::get('/huesped', HuespedComponent::class)->name('huesped');

Route::get('/empleado/registro',RegistroEmpleadoComponent::class)->name('registro_empleado');
