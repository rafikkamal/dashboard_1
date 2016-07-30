<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AppController extends Controller {

    public function showHomePage() {
        $promos = DB::table('promos')
            ->join('products', 'products.id', '=', 'promos.product')
            ->select('products.title','products.price','products.image', 'promos.id', 'promos.latest', 'promos.discount')
            ->get();
        return view('app',['promos' => $promos]);
    }

}
