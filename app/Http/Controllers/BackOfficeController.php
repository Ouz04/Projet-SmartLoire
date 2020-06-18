<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackOfficeController extends Controller
{
    public function contact()
    {
        return view('backoffice.contact');
    }
    public function store()
    {
        $data=request()->validate([
            'nom'=>'required|min:3',
            'email'=>'required|email',
            'sujet'=>'required|min:3',
            'description'=>'required|min:10',
        ]);
       Mail::to('ousmanemoussathiam@yahoo.fr')->send(new ContactMessage($data));
    }
}
