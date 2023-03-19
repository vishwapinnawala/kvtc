<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Auth;

class coursescontroller extends Controller
{
    public function index(): View
    {
        $courses = DB::select('select id,name,description,nextintake,duration,level,imageid from courses');     
        $username=Auth::user()->name;
        $uemail=Auth::user()->email;
                   
        return view('courses', ['username' => $username,'uemail' => $uemail,'courses' => $courses]);
    }
}
