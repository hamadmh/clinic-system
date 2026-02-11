<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;   // 

class HomeController extends Controller
{

 public function homeKrd()
    {
        return view('homekrd'); // resources/views/homekrd.blade.php
    }
    public function index()
    {
        $doctors = Doctor::all();
        return view('home', compact('doctors'));
    }

    public function languageDemo(){
        return view('languageDemo');
    }

    public function create()
    {
    }
}
