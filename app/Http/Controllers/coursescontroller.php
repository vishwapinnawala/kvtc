<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coursescontroller extends Controller
{
    public function index(): View
    {
        $users = DB::select('select name,description,nextintake,duration,level,imageid from users ');
/*
        Route::get('/courses', function () {
            $username=Auth::user()->name;
            $uemail=Auth::user()->email;
            return view('courses',compact('username','uemail'));
        })->middleware(['auth', 'verified'])->name('courses');
        */
        return view('courses.index', ['courses' => $courses]);
    }
}
