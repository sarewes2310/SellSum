<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuHomePageController extends Controller
{
    //Construct
    public function __construct(){

    }

    public function landingpage(){
        return view('homepage.home');
    }
}
