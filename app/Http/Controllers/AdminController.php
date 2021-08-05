<?php

namespace App\Http\Controllers;

use App\Http\Requests\themMoiTaiKhoanAdmin;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function loginView()
    {
        return view('admin.login');
    }

    public function registerView()
    {
        $data = Admin::all();
        return view('admin.auth.index', compact('data'));
    }
    public function register(themMoiTaiKhoanAdmin $request)
    {
        $name = trim($request->hovaten);
        $last_name = (strpos($name, ' ') === false) ? '' : preg_replace('#.*\s([\w-]*)$#', '$1', $name);
        $first_name = trim( preg_replace('#'.preg_quote($last_name,'#').'#', '', $name ) );
        // dd($last_name, $first_name);

        Admin::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'last_name' => $last_name,
            'first_name'  => $first_name,
        ]);

        toastr()->success('Đã thêm mới tài khoản thành công!');
        return $this->registerView();
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');
        $account = Auth::guard('admin')->attempt($data);

        if($account){
            return $this->registerView();
        } else {
            return $this->loginView();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return $this->loginView();
    }
}
