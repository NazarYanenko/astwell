<?php

namespace App\Http\Controllers;

use App\Models\WorkTime;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {

        $dates = WorkTime::query()
            ->with('shop')
            ->whereDateIs($request)
            ->whereTimeIs($request)
            ->paginate(5);

        return view('front.index')->with(['dates' => $dates]);
    }
}
