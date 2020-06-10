<?php

namespace App\Http\Controllers;

use App\Author;

class AuthorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin'); 
    }  
    
    public function index()
    {
        $authors = Author::all();
        return view('admin',compact('authors'));
    }
}
