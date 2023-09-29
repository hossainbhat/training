<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexControllert extends Controller
{
    public function Index(){
        return view("index");
    }

    public function About(){
        return view("about.about");
    }


}
