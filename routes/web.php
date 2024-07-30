<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Redirect root URL to /order
Route::get('/', function () {
    return redirect('/order');
});

// Route to show the order form
Route::get('/order', [PizzaOrderController::class, 'showForm']);

// Route to calculate the bill
Route::post('/order', [PizzaOrderController::class, 'calculateBill']);
