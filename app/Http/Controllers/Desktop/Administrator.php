<?php

namespace App\Http\Controllers\Desktop;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Administrator extends Controller
{
    //
    public function panel()
    {
        # code...
        return view('administrator/panel');
    }
    public function access()
    {
        # code...
        return view('administrator/access');
    }
    public function reports()
    {
        # code...
        return view('administrator/reports');
    }
}
