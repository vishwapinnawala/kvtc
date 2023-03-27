<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class indexcontroller extends Controller
{
    public function index(): View
    {
        $courses = DB::select('select name,description,imageid from courses ORDER BY ID DESC LIMIT 4'); 
        $vision = DB::select('select vision,mission,sc1,sc2,sc3,sc4 from vision ORDER BY ID DESC LIMIT 1');     

        $files = \File::files(('image/bg/'));

        //$files="vishwa";
        $files[0]=preg_replace('/\\\\/i', '/', $files[0]);
        $files[1]=preg_replace('/\\\\/i', '/', $files[1]);
        $files[2]=preg_replace('/\\\\/i', '/', $files[2]);

        $pic = \File::files('image/gallery/');
        $pic[0]=preg_replace('/\\\\/i', '/', $pic[0]);
        $pic[1]=preg_replace('/\\\\/i', '/', $pic[1]);
        $pic[2]=preg_replace('/\\\\/i', '/', $pic[2]);
        $pic[3]=preg_replace('/\\\\/i', '/', $pic[3]);

        
        return view('hello', ['files' => $files,'vision' => $vision,'courses' => $courses,'pic' => $pic]);
    }
}
