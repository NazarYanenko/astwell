<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopsController extends Controller
{
    public function index()
    {
        $shops = Shop::query()->paginate(20);
        return view('admin.shop.index')->with([
            'shops' => $shops
        ]);
    }

    public function delete(Request $request)
    {
        $shop =Shop::query()
            ->find($request->id);
        $shop->workGraphs()->delete();
        $shop->delete();
        return redirect(route('admin.shops'));
    }

    public function shedule($id){
        return view('admin.shop.shedule')->with([
            'id' => $id
        ]);
    }

    public function edit(Request $request,$id)
    {
        $shop = Shop::where('id', $id)->firstOrFail();
        $shedule = $shop->workGraphs()
            ->where('date', $request->date)
            ->update([
                'is_open' => checkbox_boolean($request->is_open),
                'time_open' => $request->time_open,
                'time_closed' => $request->time_closed,
        ]);
        return redirect()->back();
    }
}
