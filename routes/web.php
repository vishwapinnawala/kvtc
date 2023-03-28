<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\coursescontroller;
use App\Http\Controllers\siteconfigcontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\gallerydashboardcontroller;
use App\Http\Controllers\courselistcontroller;

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
/*
Route::get('/', function () {
    return view('hello');
});*/

Route::controller(indexcontroller::class)->group(function () {
    Route::get('/', 'index');
    //Route::post('/addcourse', 'store');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/teacher', function () {
    return view('teacher');
});


Route::controller(courselistcontroller::class)->group(function () {
    Route::get('/courseslist', 'index');
});




Route::get('/gallery', function () {
    $pics = \File::files('image/gallery/');
    return view('gallery',['pics' => $pics]);
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


/*
Route::get('/courses', function () {
    $username=Auth::user()->name;
    $uemail=Auth::user()->email;
    return view('courses',compact('username','uemail'));
})->middleware(['auth', 'verified'])->name('courses');
*/

//Route::get('/courses', [coursescontroller::class, 'index']);
//Route::get('/courses', [coursescontroller::class, 'index'])->middleware(['auth', 'verified'])->name('siteconfig');



Route::controller(coursescontroller::class)->group(function () {
    Route::get('/courses', 'index');
    Route::post('/addcourse', 'store');
    Route::post('/updatecourse', 'update');
    Route::post('/deletecourse', 'destroy');
})->middleware(['auth', 'verified'])->name('courses');



Route::controller(gallerydashboardcontroller::class)->group(function () {
    Route::get('/gallerydashboard', 'index');
    Route::post('/imgdelete', 'delete');
    Route::post('/imgadd', 'add');
    //Route::post('/updatecourse', 'update');
    //Route::post('/deletecourse', 'destroy');
})->middleware(['auth', 'verified'])->name('gallerydashboard');



Route::controller(siteconfigcontroller::class)->group(function () {
    Route::get('/siteconfig', 'index');
    Route::post('/addbg', 'store');
    Route::post('/adddata', 'content');
})->middleware(['auth', 'verified'])->name('siteconfig');




//Route::get('/courses', [coursescontroller::class, 'index'])->middleware(['auth', 'verified'])->name('siteconfig');
//Route::post('/updatecourse', [coursescontroller::class, 'store'])->middleware(['auth', 'verified'])->name('siteconfig');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('profile.logout');
});


require __DIR__.'/auth.php';
