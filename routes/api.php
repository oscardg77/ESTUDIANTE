<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


route::get('/estudiante', [EstudianteController::class, 'index']);
route::get('/estudiante/{id}', [EstudianteController::class, 'show']);
route::post('/estudiante', [EstudianteController::class, 'store']);
route::put('/estudiante/{id}', [EstudianteController::class, 'update']);
route::delete('/estudiante/{id}', [EstudianteController::class, 'destroy']);



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//  return $request->user();
//});

