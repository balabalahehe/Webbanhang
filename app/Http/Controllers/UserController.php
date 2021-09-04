<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\themTaiKhoanRequest;
use Illuminate\Support\Str;
use App\User;
use App\Jobs\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(themTaiKhoanRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $hash = (string) Str::uuid();
        $data['hash'] = $hash;

        toastr()->success('You are register successfully!');

        $details['fullname'] = $data['fullname'];
        $details['hash'] = $hash;

        sendMail::dispatch($data['email'], 'mails.activeMail', $details, 'Xác Minh Tài Khoản');

        User::create($data);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        $user = Auth::guard('user')->attempt($data);
        if($user){
            $user = Auth::guard('user')->user();
            toastr()->success('Login successfully!');
            return redirect('/');
        } else {
            toastr()->error('Login errors!');
            return redirect('/');
        }
    }

    public function active($hash)
    {
        $user = User::where('hash', $hash)->first();
        if($user){
            echo 'login Thanh Cong';
            // if($user->is_verifymail == 0){
            //     $user->is_verifymail = 1;
            //     $user->save();
            //     echo 'Oke, da kich hoat tai khoan thanh cong';
            // } else {
            //     echo 'Tai khoan da duoc kich hoat roi';
            // }
        } else {
            echo 'Het Viec Lam A???';
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();
        toastr()->success('Logout successfully!');
        return redirect('/');
    }
}
