<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;


class courselistcontroller extends Controller
{
    public function index(): View
    {
        $pic = \File::files('image/bg/');
    
        for( $i = 0 ; $i < count($pic) ; $i++ ) {
            $pic[$i]=preg_replace('/\\\\/i', '/', $pic[$i]);
        }
        
        $courses = DB::select('select id,name,description,nextintake,duration,level,imageid from courses');     
        
                   
        return view('courselist', ['files' => $pic,'courses' => $courses]);
    }
}
