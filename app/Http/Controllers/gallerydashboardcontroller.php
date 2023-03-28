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


class gallerydashboardcontroller extends Controller
{
    public function index(): View
    {

    $username=Auth::user()->name;
    $uemail=Auth::user()->email;
    
    $pic = \File::files('image/gallery/');
    
    for( $i = 0 ; $i < count($pic) ; $i++ ) {
        $pic[$i]=preg_replace('/\\\\/i', '/', $pic[$i]);
    }

    return view('gallerydashboard', ['username' => $username,'email' => $uemail,'images'=>$pic]);
    }

    public function delete(Request $request): RedirectResponse
    {
        
        $imagename = $request->input('imgname');
        \File::delete(public_path($imagename));
       
                   
        return redirect('gallerydashboard');
    }  
    public function add(Request $request): RedirectResponse
    {
        
        foreach($request->file('imageid') ?? [] as $key => $image){
            //$image = $request->file('imageid[]');
        
            $namegen=hexdec(uniqid());
            $imgextension=strtolower($image->getClientOriginalExtension());
            $imgname=$namegen.'.'.$imgextension;
            $up_location='image/gallery/';
            $lastimg=$up_location.$imgname;
           // Storage::putFile($imgname,$image);
           //\File::allFiles(public_path('image'));
            //\File::putFile(public_path('image/bg'), new File($image));
            $image->move($up_location,$imgname);
                }
       
                   
        return redirect('gallerydashboard');
    }  
}
