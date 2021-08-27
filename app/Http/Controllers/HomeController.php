<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homeSlide;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('client.index');
    }

    public function location(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get($userIp);

        dd($locationData);
    }
}
