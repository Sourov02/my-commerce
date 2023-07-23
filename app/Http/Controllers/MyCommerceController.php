<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    public function index(){
//        $categories = Category::all();
//        return view('website.home.index', compact('categories'));
//        Note: evabe o chaile compact dhore kora jay onk jaygay e evave kore

        return view('website.home.index', [
            'products' => Product::orderBy('id', 'desc')->take('8')->get(['id', 'category_id', 'name', 'selling_price', 'image']),
        ]);
    }

//......................................

//'categories' => Category::all()

//ei categories er line ta sobgulate lagtese tai ami ei ta AppServiceProvider er likha disi sobgulate kaaj korar jonno

    public function category($id){
        return view('website.category.index',[
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($id){
        return view('website.detail.index', [
            'product' => Product::find($id)
        ]);
    }
}
