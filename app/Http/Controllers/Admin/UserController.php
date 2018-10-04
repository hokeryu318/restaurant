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
}
