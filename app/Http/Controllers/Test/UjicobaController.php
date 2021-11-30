<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ujicobacontroller extends Controller
{
    public function index()
    {
        return view ('ujicoba.index');
    }    
    public function store(Request $request)
    {
        $this->validate ($request,[
            'angka_1'   => 'required',
            'angka_2'   => 'required',
            'angka_3'   => 'required',
            'angka_4'   => 'required',
        ]);
        
        $angka_1 = $request-> angka_1;
        $angka_2 = $request-> angka_2;
        $angka_3 = $request-> angka_3;
        $angka_4 = $request-> angka_4;
        
        $hasil = ($angka_1 * $angka_2) + $angka_3 / $angka_4;
        
        dd($hasil);
    }
}