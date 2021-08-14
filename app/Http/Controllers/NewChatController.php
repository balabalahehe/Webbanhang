<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;

class NewChatController extends Controller
{
    public function index()
    {
        $user = Auth::guard('user')->user();
        $listUser = User::all();
        return view('newChat', compact('listUser', 'user'));
    }

    public function loadAllMessage()
    {
        $user = Auth::guard('user')->user();
        $chats = Chat::all();
        return response()->json([$chats, $user->id]);
    }

    public function newLogin($id)
    {
        Auth::guard('user')->loginUsingId($id);
        return redirect('/GetView');
    }

    public function newLogout()
    {
        Auth::guard('user')->logout();
        return redirect('/GetView');
    }

    public function newMessage(Request $request)
    {
        // User Được lấy là user đang login
        $user = Auth::guard('user')->user();

        $data = Chat::create([
            'content'   => $request->content,
            'user_id'   => $user->id,
        ]);

        return response()->json(['data' => $data]);
    }
}
