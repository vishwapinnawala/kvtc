<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\coursescontroller;
use App\Http\Controllers\siteconfigcontroller;
use App\Http\Controllers\indexcontroller;
use App\Http\Controllers\gallerydashboardcontroller;
use App\Http\Controllers\courselistcontroller;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\teacherdashcontroller;
use App\Http\Controllers\blogdashcontroller;
use App\Http\Controllers\blogscontroller;
use App\Http\Controllers\blogpostscontroller;
use App\Http\Controllers\contactscontroller;

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


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::controller(courselistcontroller::class)->group(function () {
    Route::get('/courseslist', 'index');
});


Route::controller(teachercontroller::class)->group(function () {
    Route::get('/teacher', 'index');
});

Route::get('/gallery', function () {
    $pics = \File::files('image/gallery/');
    return view('gallery',['pics' => $pics]);
});

Route::controller(blogscontroller::class)->group(function () {
    Route::post('/blogpost', 'index');
});

Route::controller(contactscontroller::class)->group(function () {
    Route::post('/sendmail', 'send');
});

Route::controller(blogpostscontroller::class)->group(function () {
    Route::get('/blog', 'index');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::controller(siteconfigcontroller::class)->group(function () {
    Route::get('/siteconfig', 'index')->middleware(['auth', 'verified'])->name('siteconfig');
    Route::post('/addbg', 'store')->middleware(['auth', 'verified'])->name('siteconfig');
    Route::post('/adddata', 'content')->middleware(['auth', 'verified'])->name('siteconfig');
})->middleware(['auth', 'verified'])->name('siteconfig');

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
    Route::get('/courses', 'index')->middleware(['auth', 'verified'])->name('courses');
    Route::post('/addcourse', 'store')->middleware(['auth', 'verified'])->name('courses');
    Route::post('/updatecourse', 'update')->middleware(['auth', 'verified'])->name('courses');
    Route::post('/deletecourse', 'destroy')->middleware(['auth', 'verified'])->name('courses');
})->middleware(['auth', 'verified'])->name('courses');


Route::controller(blogdashcontroller::class)->group(function () {
    Route::get('/blogdash', 'index')->middleware(['auth', 'verified'])->name('blogdash');
    Route::post('/addpost', 'store')->middleware(['auth', 'verified'])->name('blogdash');
    Route::post('/updatepost', 'update')->middleware(['auth', 'verified'])->name('blogdash');
    Route::post('/deletepost', 'destroy')->middleware(['auth', 'verified'])->name('blogdash');
})->middleware(['auth', 'verified'])->name('blogdash');

Route::controller(teacherdashcontroller::class)->group(function () {
    Route::get('/teacherdash', 'index')->middleware(['auth', 'verified'])->name('teacherdash');
    Route::post('/addteacher', 'store')->middleware(['auth', 'verified'])->name('teacherdash');
    Route::post('/updateteacher', 'update')->middleware(['auth', 'verified'])->name('teacherdash');
    Route::post('/deleteteacher', 'destroy')->middleware(['auth', 'verified'])->name('teacherdash');
})->middleware(['auth', 'verified'])->name('teacherdash');



Route::controller(gallerydashboardcontroller::class)->group(function () {
    Route::get('/gallerydashboard', 'index')->middleware(['auth', 'verified'])->name('gallerydashboard');
    Route::post('/imgdelete', 'delete')->middleware(['auth', 'verified'])->name('gallerydashboard');
    Route::post('/imgadd', 'add')->middleware(['auth', 'verified'])->name('gallerydashboard');
    //Route::post('/updatecourse', 'update');
    //Route::post('/deletecourse', 'destroy');
})->middleware(['auth', 'verified'])->name('gallerydashboard');








//Route::get('/courses', [coursescontroller::class, 'index'])->middleware(['auth', 'verified'])->name('siteconfig');
//Route::post('/updatecourse', [coursescontroller::class, 'store'])->middleware(['auth', 'verified'])->name('siteconfig');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('profile.logout');
});


require __DIR__.'/auth.php';
