<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view ('books.index');
    }    
    public function create()
    {
        return view ('books.create');
    }    
    public function edit()
    {
        return view ('books.edit');
    }    
    public function store()
    {
        return view ('books.store');
    }    
}
