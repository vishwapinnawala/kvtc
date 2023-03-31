<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Auth;

class blogscontroller extends Controller
{
    
    public function index(Request $request): View
    {
        $id = $request->input('id');
        $posts = DB::select('select * from posts where id=?', [$id]);     
       
                   
        return view('blogpost', ['posts' => $posts]);
    }
}
