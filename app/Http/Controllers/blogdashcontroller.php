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

class blogdashcontroller extends Controller
{
    public function index(): View
    {
        $posts = DB::select('select id,title,imgid,description,body,date from posts');     
        $username=Auth::user()->name;
        $email=Auth::user()->email;
                   
        return view('blogdash', ['username' => $username,'email' => $email,'posts' => $posts]);
    }

    public function store(Request $request): RedirectResponse
    {
        //$id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $body = $request->body;
        $date=date('d F, Y (l)');
       


        $imageid = $request->file('imageid');

        $namegen=hexdec(uniqid());
        $imgextension=strtolower($imageid->getClientOriginalExtension());
        $imgname=$namegen.'.'.$imgextension;
        $up_location='image/posts/';
        $lastimg=$up_location.$imgname;
        $imageid->move($up_location,$imgname);


        $affected = DB::update(
         'insert into posts (title,description,body,date,imgid) VALUES (?,?,?,?,?)', 
         [$title,$description,$body,$date,$imgname]
        );
        
        return redirect('blogdash');
    }
    public function update(Request $request): RedirectResponse
    {
        $id = $request->id;
        $title = $request->title;
        $description = $request->description;
        $body = $request->body;
        $date=date('d F, Y (l)');
       


        $imageid = $request->file('imageid');

        $namegen=hexdec(uniqid());
        $imgextension=strtolower($imageid->getClientOriginalExtension());
        $imgname=$namegen.'.'.$imgextension;
        $up_location='image/posts/';
        $lastimg=$up_location.$imgname;
        $imageid->move($up_location,$imgname);

        
         

        $affected = DB::update(
         'update posts set 
            title=?,
            body=?,
            description=?,
            date=?,
            imgid=? 
          where id = ?', [$title,$body,$description,$date,$imgname,$id]
        );
        
        return redirect('blogdash');
    }
    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        $title = $request->title;
    

        $deleted = DB::delete('delete from posts where id = ? and title=?', [$id,$title]);
        
        return redirect('blogdash');
    }
}
