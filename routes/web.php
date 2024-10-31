<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotas de autenticação
Route::middleware('auth')->group(function () {
    // Rotas de cliente
    Route::get('/cadastrarCliente', [ClienteController::class, 'create'])->name('cadastrarCliente');
    Route::post('/cadastrarCliente', [ClienteController::class, 'store']);
    Route::get('/listarCliente', [ClienteController::class, 'index'])->name('listarCliente');
    Route::delete('/deletarCliente/{id}', [ClienteController::class, 'destroy']);

    // Rotas de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
