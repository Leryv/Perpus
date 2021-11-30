<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {    
        return view('user.index');
    } 

    public function create()
    {    
        return view('user.create');
    } 

    public function edit()
    {    
        return view('user.edit');
    } 

}
