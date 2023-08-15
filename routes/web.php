<?php

use App\Http\Controllers\ComputersController;
use App\Http\Controllers\PicturesController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;


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

Route::get('/', [StaticController::class, 'index'])->name("mine");



Route::get('/about', [StaticController::class, 'about'])->name("home.about");

Route::resource('computers' , ComputersController::class);
Route::resource('pictures' , PicturesController::class);




// Route::get('/about/{category}/{item?}', function ($category) {
//     return '<h1>'.strip_tags($category).'</h1>' ;
// });

// Route::get('/about', function () {
//     $style = request('style');
//     if(isset($style)){
//     return '<h1>'.strip_tags($style).'</h1>' ; 

// }
// return view ("about");
// });
