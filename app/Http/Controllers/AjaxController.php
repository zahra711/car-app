<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AjaxController extends Controller
{
    public function showAddedCar() {
        $posts = Post::all();
        $view = view("home.showaddedcar",compact('posts'))->render();
        return response()->json(['html'=>$view]);
    }
    public function ShowUsers()
    {
        $title = "data";
        $view = view("home.showusers",compact('title'))->render();
        return response()->json(['html'=>$view]);
    }
}
