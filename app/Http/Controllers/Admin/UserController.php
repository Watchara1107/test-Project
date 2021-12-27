<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function update(Request $request,$id){
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->phone = $request->phone;
        $users->update();
        return redirect()->route('user');
    }

    public function delete($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user');
    }



}
