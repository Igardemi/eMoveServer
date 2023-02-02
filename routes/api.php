<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarritosController;
use App\Http\Controllers\CiudadesController;
use App\Http\Controllers\DescuentosController;
use EMove\DAO\impl\AuthDAO;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('ciudades', CiudadesController::class);
Route::apiResource('descuentos', DescuentosController::class);
Route::post('login', [AuthController::class, 'login']);
Route::post('reg', [AuthDAO::class, 'register']);

//middleware que proteje las rutas
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AuthController::class, 'logOut']);
    Route::apiResource('carritos', CarritosController::class);
});
