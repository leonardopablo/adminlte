<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add',function(){
        return view('add');
    });
    Route::get('/view',function(){
        //OBTENER LOS EVENTOS DE LA BASE DE DATOS
        $events=\App\Models\Event::all();

        //ASIGNAR LA CABECERA A NUESTRO DATA TABLE
        $heads=[
            'id',
            'Nombre',
            'Apellido',
            'Email',
            'Contraseña'

        ];
        //RETORNAMOS LA VISTA PERO CON LOS PARÁMETROS
        return view('view',compact('events','heads'));
    });
    Route::get('/add1',function(){
        return view('add1');
    });
    Route::get('/view1',function(){
        return view('view1');
    });
    Route::get('/adddoc',function(){
        return view('adddoc');
    });
    Route::get('/viewdoc',function(){
        return view('viewdoc');
    });
    Route::get('/archivoadd',function(){
        return view('archivoadd');
    });
});

require __DIR__.'/auth.php';
