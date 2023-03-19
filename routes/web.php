<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('hello');
});
Route::get('/welcome', function () {
    return view('welcome');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::get('/dashboard', function () {
    $username=Auth::user()->name;
    $uemail=Auth::user()->email;
    return view('dashboard',compact('username','uemail'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/siteconfig', function () {
    $username=Auth::user()->name;
    $uemail=Auth::user()->email;
    return view('siteconfig',compact('username','uemail'));
})->middleware(['auth', 'verified'])->name('siteconfig');
/*
Route::get('/courses', function () {
    $username=Auth::user()->name;
    $uemail=Auth::user()->email;
    return view('courses',compact('username','uemail'));
})->middleware(['auth', 'verified'])->name('courses');
*/


Route::get('/courses', [coursescontroller::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('profile.logout');
});


require __DIR__.'/auth.php';
