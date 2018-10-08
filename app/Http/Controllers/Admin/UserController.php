<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('admin.user.list')->with('users', $users);
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function register(){
        return view('pages.register');
    }

    public function signup(Request $request){
        User::create([
            'name'     => $request->name,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);
        return redirect()->route('admin.user');
    }

    public function remove($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user');
    }
}
