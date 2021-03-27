<?php

use App\Http\Controllers\Payments\MainController as PaymentsController;
use App\Jobs\DestroyPaymentJob;
use App\Models\Payments\Main as Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('payments')->group(function () {
    Route::get('/', [PaymentsController::class, 'index']);
    Route::post('create', [PaymentsController::class, 'create']);
    Route::delete('destroy', [PaymentsController::class, 'destroy']);
});
