<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show()
    {
        $users = User::query()->paginate(20);
        return view('admin.users.show')->with([
           'users' => $users
        ]);
    }

    public function form($id)
    {
        $user = User::query()
            ->find($id);
        return view('admin.users.edit')->with([
           'user' => $user
        ]);
    }

    public function edit(Request $request ,$id)
    {

        Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|unique:admins',
            'password' => 'required|min:8',
        ])->validate();

        $edit = User::find($id);
        $edit->name = $request->name;

        if($edit->email != $request->email){
            $edit->email = $request->email;
        }

        $edit->password = $request->password;
        $edit->save();
        return redirect(route('admin.users.show'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect(route('admin.users.show'));
    }


}
