<?php

use App\Http\Controllers\JsonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//qetu ti kthen krejt userat psh: detyra.tachyonstudios.com/api/users
Route::get('/users', [JsonController::class, 'users']);

//qetu ta kthen profilin psh:  detyra.tachyonstudios.com/api/users/1
Route::get('users/{file}', [JsonController::class, 'profile']);

//qetu ti kthen krejt accounts the transactions qa jen bo per qet user psh:  detyra.tachyonstudios.com/api/users/1/accounts
Route::get('users/{file}/accounts', [JsonController::class, 'accounts']);
