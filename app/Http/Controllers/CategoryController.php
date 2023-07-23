<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.index');

    }

    public function create(Request $request){
        Category::newCategory($request);
        return back()->with('message', 'Category info create successfully.');
    }

    public function manage(){
//       Multiple process i have to follow........
//        1. return view('admin.category.manage')->with('categories', Category::all());

//        2. $categories = Category::all();
//        2. return view('admin.category.manage', compact('categories'));
//       Multiple process i have to follow........

        return view('admin.category.manage',[
            'categories' => Category::all()
        ]);
    }

    public function edit($id){
        return view('admin.category.edit', [
            'category'=> Category::find($id)
        ]);
    }

    public function update(Request $request, $id){
        Category::updatedCategory($request, $id);
        return redirect('/category/manage')->with('message', 'Category info update successfully.');

    }

    public function delete($id){
        Category::deleteCategory($id);
        return redirect('/category/manage')->with('message', 'Category info delete successfully.');
    }

}
