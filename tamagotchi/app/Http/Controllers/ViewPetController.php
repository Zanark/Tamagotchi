<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPetController extends Controller
{
    public function index()
    {
        return view('view-pet');
    }
}
