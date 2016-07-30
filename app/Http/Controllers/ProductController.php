<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product as Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller {

    public function index() {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function createProduct(){
        return view('products.create');
    }
    public function storeProduct(Request $request){
        $product = new Product;
        $product->title = $request['title'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->discount = $request['discount'];
        $product->category = $request['category'];
        $image = $request->file('picture');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image->move('img/products/', $image_name);
        } else {
            $image_name = 'no_image.png';
        }
        //echo $product->title.'<br/>'.$product->price.'<br/>'.$product->stock.'<br/>'.$product->category_id.'<br/>'.$image_name;
        
        $product->image = $image_name;
        $product->save();
        Session::flash('success', 'The product has been successfully added');
        return redirect()->route('products.index');
    }
    public function editProduct($id){
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }
    public function updateProduct(Request $request,$id){
        $product = Product::find($id);
        $product->title = $request['title'];
        $product->price = $request['price'];
        $product->stock = $request['stock'];
        $product->discount = $request['discount'];
        $product->save();
        return redirect()->route('products.show');
    }
    public function showProduct(){
        $products = Product::orderBy('id', 'ASC')->paginate(20);
        $var =  json_encode($products);
        if($products->count()){
            $status = "200";
        }
        $var1 = json_encode(array(
            'status'=>$status,
            'products'=>$products
        ));
        return $var1; 
        //echo $var1;
        /*$var2 = json_decode($var1);
        
        $var4=array();
        foreach($products as $product){
            $var4[$product->id] = $product->title;
        }
        print_r($var4);
        */
        
        //return json_encode($var2->products);
        //return view('products.show', ['products' => $products]);
    }
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();
        Session::flash('success', 'The product was successfully deleted.');
        return redirect()->route('products.index');
    }

}
