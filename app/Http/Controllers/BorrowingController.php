<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    public function index()
    {
        return view ('borrowings.index');
    }    
    public function create()
    {
        return view ('borrowings.create');
    }
}
