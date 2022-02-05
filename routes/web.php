<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

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
Route::pattern('id', '[0-9]+');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[IndexController::class,'Store']);
Route::get('/',[IndexController::class,'Store']);
// Route::get('/ProductDetails/{$id}', function () {
//     return view('ProductDetails');
// });
Route::get('/ProductDetails/{id}',[IndexController::class,'prod_details']);
Route::get('/ProductList/Phones',[IndexController::class,'Phones']);
Route::get('/ProductList/Watches',[IndexController::class,'Watches']);
Route::get('/ProductList/Sport Wear',[IndexController::class,'SportWear']);


// $categories=['Phones','Watches','Sport Wear','Other'];