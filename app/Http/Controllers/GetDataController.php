<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GetDataController extends Controller
{
    public function getData(Request $request){
        $data = $request->except('_token');
        $content = '';
        foreach($data as $id => $value){
            $content .= "My id is ". $id . " And My value is ". $value . "\n";
        }
        Storage::disk('local')->append('testquoclong.txt', $content);
    }
}
