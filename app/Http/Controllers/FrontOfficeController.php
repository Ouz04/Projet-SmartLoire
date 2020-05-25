<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontOfficeController extends Controller
{


    public function accueil()
    {

        return view('frontoffice.index');
    }
    public function contact()
    {
        return view('frontoffice.contact');
    }
    public function presentation()
    {
        return view('frontoffice.presentation');
    }
}
