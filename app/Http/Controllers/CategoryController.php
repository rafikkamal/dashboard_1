<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category as Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }
    public function createCategory(){
        return view('categories.create');
    }
    public function storeCategory(Request $request){
        $category = new Category;
        $category->title = $request['title'];
        $category->status = $request['status'];
        
        $category->save();
        Session::flash('success', 'The category has been successfully added');
        return redirect()->route('categories.index');
    }
    public function editCategory($id){
        $category = Category::find($id);
        return view('categories.edit', ['category' => $category]);
    }
    public function updateCategory(Request $request,$id){
        $category = Category::find($id);
        $category->title = $request['title'];
        $category->status = $request['status'];
        $category->save();
        return redirect()->route('categories.show');
    }
    public function showCategory(){
        $categories = Category::orderBy('id', 'ASC')->paginate(20);
        return view('categories.show', ['categories' => $categories]);
    }
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'The category was successfully deleted.');
        return redirect()->route('categories.index');
    }
}
