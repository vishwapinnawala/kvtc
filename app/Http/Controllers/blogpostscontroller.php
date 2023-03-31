<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Auth;

class blogpostscontroller extends Controller
{
    public function index(Request $request): View
    {
       
        $posts = DB::select('select * from posts');     
       
                   
        return view('blog', ['posts' => $posts]);
    }
}
