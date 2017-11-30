<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function showUsers()
    {
        $users = User::query()->paginate(20);

        return view('admin.manageUsers.showUsers')->with([
           'users' => $users
        ]);
    }

    public function editUsersForm($id)
    {
//        dd($id);
        $user = User::query()->find($id);
        return view('admin.manageUsers.edit')->with([
            'user' => $user
        ]);

//        return redirect(route('admin.users.show'));
    }

    public function editUser(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|unique:admins',
            'password' => 'required|min:8',
        ])->validate();

        $edit = User::find($request->id);
        $edit->name = $request->name;

        if($edit->email != $request->email){
            $edit->email = $request->email;
        }

        $edit->password = $request->password;
        $edit->save();
        return redirect(route('admin.users.show'));
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.users.show'));
    }


}
