<?php

namespace App\Http\Controllers;
 
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin()
    {
        return view ('admin');
    }

    public function add_user(Request $request)
    {
        $password = bcrypt($request->password);
        DB::table('users')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => $password,
            'devisi' => $request->devisi,
        ]);
        return redirect('admin/user/add_user');
    }

    public function user()
    {
        $user = DB::table('users')->get();
        return view('user', ['user' => $user]);
    }

}
