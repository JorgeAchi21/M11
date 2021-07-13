<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\peopleGestController;

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


/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [peopleGestController::class, 'home'])
    ->name('home');

//SHOW - LIST
Route::get('/empleados/show', [peopleGestController::class, 'show'])
    ->name('show');

Route::get('/empleados/show/{id}', [peopleGestController::class, 'showid'])
    ->name('empleados.showid');

//FIND BY
Route::get('/empleados/find', [peopleGestController::class, 'find'])
    ->name('empleados.find');

//CREATE
Route::get('/empleados/create', [peopleGestController::class, 'create'])
    ->name('empleados.create');
    
Route::post('/empleados/create', [peopleGestController::class, 'createStore'])
    ->name('empleados.createStore');

//EDIT
Route::get('empleados/edit/{id}', [peopleGestController::class, 'edit'])
    ->name('empleados.edit');

Route::put('/empleados/edit/{id}', [peopleGestController::class, 'editStore'])
    ->name('empleados.editStore');

//DELETE
Route::delete('empleados/delete/{id} ', [peopleGestController::class, 'destroy'])
    ->name('empleados.destroy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
