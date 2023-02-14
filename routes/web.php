<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicioController;
use App\Models\Cliente;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // $arrayClientes = Cliente::all();
    $arrayClientes = Cliente::query()
        ->when(Request::input('search'), function($query,$search){
            $query->Where('Nombre', 'like', "%{$search}%");
        })
        ->when((Request::input('sort') == 'up') || (Request::input('sort') === null), function($query){
            $query->orderBy('Nombre','asc');
        })
        ->when(Request::input('sort') == 'down', function($query){
            $query->orderBy('Nombre','desc');
        })
        ->paginate(10)
        ->withQueryString();

    return Inertia::render('Welcome', [
        'arrayClientes' => $arrayClientes,
        'filters' => Request::only(['search','sort']),
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([ 'auth:sanctum', config('jetstream.auth_session'), 'verified', ])->group(function () {
    Route::get('/dashboard', function () { return Inertia::render('Dashboard'); })->name('dashboard');
    Route::get('indexCliente', [ClienteController::class, 'index'])->name('indexCliente');
    Route::get('editCliente/{id}', [ClienteController::class, 'edit'])->name('editCliente');
    Route::get('editServicio/{id}', [ServicioController::class, 'edit'])->name('editServicio');
    Route::get('indexServicio', [ServicioController::class, 'index'])->name('indexServicio');

    // <NavLink :href="route('dashboard')" :active="route().current('dashboard')"> Principal </NavLink>
});


// Route::post('SoloCambiarContenido', [CursoController::class, 'SoloCambiarContenido'])->name('SoloCambiarContenido');
