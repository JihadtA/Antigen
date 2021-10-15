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
            "name" => "Puan Maharani",
            "email" => "puanmaharani@gmail.com",
            "image" => "puan.jpg"
         ]);
    }
}
