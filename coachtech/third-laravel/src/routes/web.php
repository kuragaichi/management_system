<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Person;
use App\Http\Controllers\AuthController;
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('uuid', function () {
    $products = Product::all();
    foreach($products as $product){
        echo $product.'<br>';
    }
});