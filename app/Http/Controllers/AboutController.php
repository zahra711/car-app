<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit(){
        $about=About::all();
        return view('admin.about.edit',compact('about'));
    }
}
