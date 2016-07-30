<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo as Promo;
use App\Product as Product;

class PromoController extends Controller {

    public function index() {
        $products = Product::all();
        return view('promo.index', ['products' => $products]);
    }

    public function createPromo() {
        $products = [];
        foreach (Product::all() as $product) {
            $products[$product->id] = $product->title;
        }
        return view('promo.create', compact('products'));
    }

    public function storePromo(Request $request) {
        $product_id = $request['product'];
        $discount = $request['discount'];
        $latest = $request['latest'];
        $promo = new Promo;
        $promo->product = $product_id;
        $promo->discount = $discount;
        $promo->latest = $latest;
        if (Promo::all()->count() <= 10) {
            $message = 'The promo has been successfully added';
            $promo->save();
            Session::flash('success', $message);
        } else {
            $message = 'Can not add more than 10 Products in Pormo Slider';
            Session::flash('no success', $message);
        }
        return view('promo.index', ['message' => $message]);
    }

    public function showPromo() {
        $promo = Promo::all();
        return view('promo.show', ['promos' => $promo]);
    }

}
