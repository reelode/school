<?php

use App\Http\Controllers\ProfilesController;
use Illuminate\Support\Facades\Auth;
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

/*Route::get('/', function () {
    return view('welcome');
}); */

//Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('profile/{user}', [ProfilesController::class, 'index'])->name('profile.index');
Route::group(
    ['middleware' => 'auth'],
    function () {

        Route::get(
            'profile/{id}',
            [ProfilesController::class, 'view']
        )->name('profile.index');
    }
);
