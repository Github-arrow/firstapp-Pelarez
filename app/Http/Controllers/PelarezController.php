<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelarezController extends Controller
{
    public function personalinfo()
    {
        return view('personalinfo');
    }
}
