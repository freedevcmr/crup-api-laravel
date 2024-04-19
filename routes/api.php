<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProduitController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/produits', [ProduitController::class, 'create']);
Route::put('/produits/{id}',[ProduitController::class, 'update']);
Route::delete('/produits/{id}', [ProduitController::class, 'delete']);
Route::get('/produits/{id}', [ProduitController::class, 'show']);
Route::get('/produits', [ProduitController::class, 'index']);
