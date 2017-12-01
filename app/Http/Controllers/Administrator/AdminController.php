<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 28.11.17
 * Time: 15:27
 */

namespace App\Http\Controllers\Administrator;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }



    public function show()
    {
        $admins = Admin::query()->paginate();
        return view('admin.admins.list')->with(['admins' => $admins]);
    }

    public function form()
    {
        return view('admin.admins.form');
    }

    public function create(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|unique:admins',
            'password' => 'required|min:8',
        ])->validate();

        Admin::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect(route('admin.dashboard'));
    }

    public function editForm($id)
    {
        $admin = Admin::query()->find($id);
        return view('admin.admins.edit')->with(['admin'=>$admin]);
    }

    public function edit(Request $request){

        Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required',
            'password' => 'required|min:8',
        ])->validate();

        $admin = Admin::find($request->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();

        return redirect(route('admin.list'));

    }

}