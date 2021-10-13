<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile',[
            "title" => "Profile",
            "judultabel" => "Profile",
            "name" => "Fahruz Sama",
            "email" => "nekopoimantul@gmail.com",
            "image" => "cz.png"
         ]);
    }
}
