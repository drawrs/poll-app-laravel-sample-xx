<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/api/poll', [App\Http\Controllers\ApiController::class, 'getAllPoll'])->name('api.poll.all');

///api/v1/api/poll/1/vote/2
Route::get('/v1/api/poll/{poll_id}/vote/{choice_id}', [App\Http\Controllers\ApiController::class, 'createVoting'])->name('api.poll.voting');