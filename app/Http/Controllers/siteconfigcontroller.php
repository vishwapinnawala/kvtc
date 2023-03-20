<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class siteconfigcontroller extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        foreach (($request->file('imageid')) as $imageid){
    //$imageid = $request->file('');

    $namegen=hexdec(uniqid());
    $imgextension=strtolower($imageid->getClientOriginalExtension());
    $imgname=$namegen.'.'.$imgextension;
    $up_location='image/bg/';
    $lastimg=$up_location.$imgname;
    $imageid->move($up_location,$imgname);
}
    return redirect('siteconfig');
        
    }
}
