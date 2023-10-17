<?php

use App\Http\Controllers\DiagramadorController;
use App\Models\diagramador;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('diagramador', DiagramadorController::class);
    Route::get('invitar/{diagramador}',[DiagramadorController::class, 'invitar'])->name('invitar');
    Route::Post('registrarInvitado',[DiagramadorController::class, 'registrarInvitado'])->name('registrarInvitado');


    Route::get('exportarCodigoZip',[DiagramadorController::class, 'exportarCodigoZip'])->name('exportarCodigoZip');

    Route::get('exportarCase',[DiagramadorController::class, 'exportarCase'])->name('exportarCase');

    Route::get('exportarJson',[DiagramadorController::class, 'exportarJson'])->name('exportarJson');
    Route::post('exportarJson2',[DiagramadorController::class, 'exportarJson2'])->name('exportarJson2');
});
