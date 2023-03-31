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
        $courses = DB::select('select name,nextintake,imageid from courses ORDER BY ID DESC '); //LIMIT 4
        $vision = DB::select('select vision,mission,sc1,sc2,sc3,sc4 from vision ORDER BY ID DESC LIMIT 1');     
        $posts = DB::select('select id,title,imgid,description,body,date from posts'); 
        $files = \File::files(('image/bg/'));

        //$files="vishwa";
        

        for( $i = 0 ; $i < count($files) ; $i++ ) {
            $files[$i]=preg_replace('/\\\\/i', '/', $files[$i]);
        }

        $pic = \File::files('image/gallery/');
        for( $i = 0 ; $i < count($pic) ; $i++ ) {
            $pic[$i]=preg_replace('/\\\\/i', '/', $pic[$i]);
        }

        
        return view('hello', ['files' => $files,'vision' => $vision,'courses' => $courses,'pic' => $pic,'posts'=>$posts]);
    }
}
