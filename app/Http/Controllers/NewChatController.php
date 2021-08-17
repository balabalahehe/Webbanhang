<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Chat;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Events\newMessage;
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
        if($user){
            $data = Chat::create([
                'content'   => $request->content,
                'user_id'   => $user->id,
            ]);

            broadcast(new newMessage($request->content, $user->id));

            return response()->json(['data' => $data]);
        }
    }

    public function deleteAll()
    {
        try {
            DB::transaction(function () {
                $chats = Chat::all();
                foreach($chats as $chat){
                    $chat->delete();
                }
            });
            return response()->json(['trangThai' => 'done']);
        } catch (Exception $e) {
            return response()->json(['trangThai' => 'no']);
        }
    }

    // public function loadFake()
    // {
    //     $data = [];
    //     $now = Carbon::now()->subSeconds(1);
    //     $user = Auth::guard('user')->user();
    //     if($user){
    //         $data = Chat::where('user_id', '<>', $user->id)
    //                     ->where('created_at', '>=' , $now)
    //                     ->get();
    //     }
    //     return response()->json(['data' => $data]);
    // }
}
