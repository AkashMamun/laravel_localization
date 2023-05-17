<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class langController extends Controller
{
    public function lang(){
        return view('lang');
    }
    public function langChange(Request $request){
        App::setLocale($request->lang);
        session()->put('lang_code',$request->lang);
        return redirect()->back();
    }
}
