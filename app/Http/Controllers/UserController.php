<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.Users.index' , compact('users'));
    }

    public function viewuser($id)
    {
        $user = User::find($id);
        return view('admin.Users.view' , compact('user'));
    }
}
