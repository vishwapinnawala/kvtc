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

class siteconfigcontroller extends Controller
{
    public function index(): View{

        $vision = DB::select('select vision,mission,sc1,sc2,sc3,sc4 from vision ORDER BY ID DESC LIMIT 1');     
        $username=Auth::user()->name;
        $uemail=Auth::user()->email;
                   
        return view('siteconfig', ['username' => $username,'uemail' => $uemail,'vision' => $vision]);
    }

    public function store(Request $request): RedirectResponse
    {
        //foreach (($request->file('imageid')) as $imageid){}
       \File::deleteDirectory(public_path('image/bg'));
       foreach($request->file('imageid') ?? [] as $key => $image){
    //$image = $request->file('imageid[]');

    $namegen=hexdec(uniqid());
    $imgextension=strtolower($image->getClientOriginalExtension());
    $imgname=$namegen.'.'.$imgextension;
    $up_location='image/bg/';
    $lastimg=$up_location.$imgname;
   // Storage::putFile($imgname,$image);
   //\File::allFiles(public_path('image'));
    //\File::putFile(public_path('image/bg'), new File($image));
    $image->move($up_location,$imgname);
        }
     return redirect('siteconfig');
    }
   
    public function content(Request $request): RedirectResponse
    {
        
        $vision = $request->input('vision');
        $mission = $request->input('mission');
        $sc1 = $request->input('sc1');
        $sc2 = $request->input('sc2');
        $sc3 = $request->input('sc3');
        $sc4 = $request->input('sc4');

        $affected = DB::update(
            'insert into vision (vision,mission,sc1,sc2,sc3,sc4) VALUES (?,?,?,?,?,?)', 
            [$vision,$mission,$sc1,$sc2,$sc3,$sc4]
           );
                   
        return redirect('siteconfig');
    }  
}


