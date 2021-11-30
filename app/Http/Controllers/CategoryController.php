<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view ('category.index');
    }    
    public function create()
    {
        return view ('category.create');
    }    
    public function store(Request $request)
    {
        $this->validate ($request,[
            'name'   => 'required',
            'no_rak'   => 'required',
        ]);

        $category = Category::create([
            "name"       =>  $request->input('name'),
            "no_rak"     =>  $request->input('no_rak'),
        ]);

        $category->save();

        return redirect()->back();
    }
}
