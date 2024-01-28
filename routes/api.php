<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/applicants', [ApplicantController::class, 'index']);
Route::post('/applicants', [ApplicantController::class, 'store']);
Route::get('/applicants/{applicant}', [ApplicantController::class, 'show']);
Route::put('/applicants/{applicant}', [ApplicantController::class, 'update']);
Route::delete('/applicants/{applicant}', [ApplicantController::class, 'destroy']);

