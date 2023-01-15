<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        return view('admin.user.index');
    }
    public function create(Request $request){
        User::newUser($request);
        return redirect('/admin/add-user')->with('message', 'User info save successfully');
    }

    public function manage(){
        return view('admin.user.manage-user', ['users' => User::all()]);
    }
}
