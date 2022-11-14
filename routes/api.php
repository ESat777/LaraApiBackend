<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CountryController;
use App\Http\Controllers\Api\V1\HotelController;
use App\Http\Controllers\Api\V1\CustomerController;

use App\Http\Controllers\Api\V1\ApiAuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('v1/country', CountryController::class, ['only' => ['index', 'show']]);
Route::resource('v1/country', CountryController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');
Route::put('v1/country/{id}', [CountryController::class, 'update'])->middleware('auth:sanctum');
Route::post('v1/country', [CountryController::class, 'store'])->middleware('auth:sanctum');
Route::delete('v1/country/{id}', [CountryController::class, 'destroy'])->middleware('auth:sanctum');


Route::resource('v1/hotel', HotelController::class, ['only' => ['index', 'show']]);
Route::resource('v1/hotel', HotelController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');
Route::delete('v1/hotel/{id}', [HotelController::class, 'destroy'])->middleware('auth:sanctum');
Route::put('v1/hotel/{id}', [HotelController::class, 'update'])->middleware('auth:sanctum');
Route::post('v1/hotel', [HotelController::class, 'store'])->middleware('auth:sanctum');


Route::delete('v1/customers/{id}', [CustomerController::class, 'destroy'])->middleware('auth:sanctum');
Route::put('v1/customers/{id}', [CustomerController::class, 'update'])->middleware('auth:sanctum');
Route::post('v1/customers', [CustomerController::class, 'store'])->middleware('auth:sanctum');
Route::resource('v1/customers', CustomerController::class, ['only' => ['index', 'show']]);
Route::resource('v1/customers', CustomerController::class, ['except' => ['index', 'show']])->middleware('auth:sanctum');



Route::post('v1/register', [ApiAuthController::class, 'register']);
Route::post('v1/login', [ApiAuthController::class, 'login']);
Route::post('v1/logout', [ApiAuthController::class, 'logout'])->middleware('auth:sanctum');
