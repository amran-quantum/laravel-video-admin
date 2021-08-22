<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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
Route::get('/user', function (Request $request) {
    return ([
        'amran' => "amran"
    ]);
});
// Route::get('/single-file', "VideoController@show_product");
Route::post('/single-file', [VideoController::class, 'image_upload']);
Route::post('/single-file-store', [VideoController::class, 'image_upload_store']);
Route::post('/login', [VideoController::class, 'login']);
Route::get('/get-all-video', [VideoController::class, 'allVideo']);
