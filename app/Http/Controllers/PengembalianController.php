<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        return view ('bookreturn.index');
    }    

}
