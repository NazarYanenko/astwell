<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class AdminShopsController extends Controller
{
    public function index()
    {
        $shops = Shop::query()->paginate(20);
//        dd($shops);
        return view('admin.shop.index')->with([
            'shops' => $shops
        ]);
    }

    public function delete(Request $request)
    {
        $shop = Shop::query()
            ->find($request['id']);
        $shop->workGraphs()->delete();
        $shop->delete();

        return redirect(route('admin.shops.index'));

    }
}
