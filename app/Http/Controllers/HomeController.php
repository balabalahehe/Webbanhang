<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeSlide;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
}
