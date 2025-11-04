<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TestController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Adicionar uma rota API básica
Route::get('/', function () {
    return response()->json([
        'message' => 'API Laravel 10 funcionando!',
        'status' => 'success',
        'timestamp' => now()
    ]);
});

// Rota de teste
Route::get('/test', function () {
    return response()->json([
        'message' => 'Teste API funcionando!',
        'data' => ['id' => 1, 'name' => 'Teste']
    ]);
});
Route::get('/controller', [TestController::class, 'index']);
