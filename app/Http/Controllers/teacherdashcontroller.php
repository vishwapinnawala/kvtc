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

class teacherdashcontroller extends Controller
{
    public function index(): View
    {
        $teachers = DB::select('select id,name,subject,description from teachers');     
        $username=Auth::user()->name;
        $email=Auth::user()->email;
                   
        return view('teacherdash', ['username' => $username,'email' => $email,'teachers' => $teachers]);
    }

    public function store(Request $request): RedirectResponse
    {
        //$id = $request->id;
        $name = $request->name;
        $subject = $request->subject;
        $description = $request->description;
       


        $imageid = $request->file('imageid');

        $namegen=hexdec(uniqid());
        $imgextension=strtolower($imageid->getClientOriginalExtension());
        $imgname=$namegen.'.'.$imgextension;
        $up_location='image/teachers/';
        $lastimg=$up_location.$imgname;
        $imageid->move($up_location,$imgname);


        $affected = DB::update(
         'insert into teachers (description,subject,name,imgid) VALUES (?,?,?,?)', 
         [$description,$subject,$name,$imgname]
        );
        
        return redirect('teacherdash');
    }

    public function update(Request $request): RedirectResponse
    {
        $id = $request->id;
        $name = $request->name;
        $subject = $request->subject;
        $description = $request->description;
       


        $imageid = $request->file('imageid');

        $namegen=hexdec(uniqid());
        $imgextension=strtolower($imageid->getClientOriginalExtension());
        $imgname=$namegen.'.'.$imgextension;
        $up_location='image/teachers/';
        $lastimg=$up_location.$imgname;
        $imageid->move($up_location,$imgname);

        $affected = DB::update(
         'update teachers set 
            name=?,
            subject=?,
            description=?,
            imgid=? 
          where id = ?', [$name,$subject,$description,$imgname,$id]
        );
        
        return redirect('teacherdash');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        $name = $request->name;
    

        $deleted = DB::delete('delete from teachers where id = ? and name=?', [$id,$name]);
        
        return redirect('teacherdash');
    }
}
