<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\TopController;

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

Route::controller(TopController::class)->group(function () {
    Route::get('/', 'default')->name('default');
    Route::get('work', 'work')->name('work');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
