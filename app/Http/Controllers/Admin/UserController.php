<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        return view('admin.user.edit',compact('users'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('user');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user');
    }
}
