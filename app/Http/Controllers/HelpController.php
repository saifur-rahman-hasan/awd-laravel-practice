<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function showHelpPage()
    {
         if( auth()->check() ){
            return view('help');
        }else{
            return redirect()->route('login');
        }
    }
}
