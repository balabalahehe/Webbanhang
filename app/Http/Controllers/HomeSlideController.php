<?php

namespace App\Http\Controllers;

use App\Models\homeSlide;
use App\Http\Requests\themMoiSlideRequest;
use Illuminate\Http\Request;

class HomeSlideController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        $data = homeSlide::all();
        return view('admin.slide.create', compact('data'));
    }

    public function store(themMoiSlideRequest $request)
    {
        homeSlide::create($request->all());
        toastr()->success('Đã Thêm Mới Silde Thành Công!');
        return redirect()->back();
    }


    public function show(homeSlide $homeSlide)
    {
        //
    }


    public function edit(homeSlide $homeSlide)
    {
        //
    }


    public function update(Request $request, homeSlide $homeSlide)
    {
        //
    }


    public function destroy(homeSlide $homeSlide)
    {
        //
    }
}
