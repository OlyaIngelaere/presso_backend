<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CapsuleController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AnswerCapsuleController;

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

// ABOUT CAPSULES
Route::get("/data",[CapsuleController::class, 'getAllCapsules']);
Route::get("/original",[CapsuleController::class, 'getOriginal']);
Route::get("/vertuo",[CapsuleController::class, 'getVertuo']);

// ABOUT CARTS
Route::get('/cart', [CartController::class, 'index']);         // show cart
Route::post('/cart', [CartController::class, 'store']);        // add to cart
Route::patch('/cart/{id}', [CartController::class, 'update']); // update quantity
Route::delete('/cart/{id}', [CartController::class, 'destroy']); // remove item

// ABOUT CHECKOUT
Route::get('/checkout', [CheckoutController::class, 'index']);
Route::post('/checkout', [CheckoutController::class, 'store']);

Route::post('/checkout', [PaymentController::class, 'checkout']);
// ABOUT QUESTIONS
Route::get('/question', [QuestionController::class, 'getQuestionsWithAnswers']);

// ABOUT SESSION
Route::get('/session', [SessionController::class, 'getNewSession']);
Route::get('/session/{code}', [SessionController::class, 'getSession']);

// ABOUT SESSION ANSWER
Route::post('/sessionanswer', [SessionController::class, 'sessionAnswer']);

// ABOUT SESSION ANSWER
Route::get('/answercapsules/{id}', [AnswerCapsuleController::class, 'getRecommendedCapsules']);
