<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
        $email=Auth::user()->email;
                   
        return view('courses', ['username' => $username,'email' => $email,'courses' => $courses]);
    }

    public function store(Request $request): RedirectResponse
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;
        $nextintake = $request->nextintake;
        $duration = $request->duration;
        $level = $request->level;


        $imageid = $request->file('imageid');

        $namegen=hexdec(uniqid());
        $imgext=strtolower($imageid->getClientOriginalExtension());
        $imgname=$namegen.'.'.$imgext;
        $up_location='image/courses/';
        $lastimg=$up_location.$imgname;
        $imageid->move($up_location,$imgname);


        $affected = DB::update(
         'insert into courses (name,description,nextintake,duration,level,imageid) VALUES (?,?,?,?,?,?)', 
         [$name,$description,$nextintake,$duration,$level,$imgname]
        );
        
        return redirect('courses');
    }

    public function update(Request $request): RedirectResponse
    {
        $id = $request->id;
        $name = $request->name;
        $description = $request->description;
        $nextintake = $request->nextintake;
        $duration = $request->duration;
        $level = $request->level;
        $imageid = $request->imageid;

        $affected = DB::update(
         'update courses set 
            id = ?,
            name=?,
            description=?,
            nextintake=?,
            duration=?,
            level=?,
            imageid=? 
          where id = ?', [$id,$name,$description,$nextintake,$duration,$level,$imageid,$id]
        );
        
        return redirect('courses');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        $name = $request->name;
    

        $deleted = DB::delete('delete from courses where id = ? and name=?', [$id,$name]);
        
        return redirect('courses');
    }
    
}
