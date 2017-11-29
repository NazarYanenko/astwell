<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 28.11.17
 * Time: 15:27
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

        return view('home');
    }
}