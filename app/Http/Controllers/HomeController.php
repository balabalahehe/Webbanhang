<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeSlide;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->ip();
        $locationData = \Location::get($userIp);

        dd($locationData);
        return view('client.index');
    }
}
