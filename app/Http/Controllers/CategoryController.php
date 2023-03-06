<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        //
    }


    public function create()
    {
        //
        return view('Admin.add_category');
    }

   
    public function store(Request $request)
    {
        //
        $result = new Category;
     $result->category_name=$request->input('category');
     $result->post=$request->input('post');
        $result->save();
 
        $request->session()->flash('msg','Information inserted');
        return redirect('/Admin/category');
    }

    
    public function show(Category $category)
    {
        //
        return view('Admin.category')->with('categoryArr',Category::all());
    }

   
    public function edit(Category $category,$id)
    {
        //
        return view('Admin.category_edit')->with('category',Category::find($id));
    }

    public function update(Request $request, Category $category)
    {
        //
        $result = Category::find($request->id);
        $result->category_name=$request->input('category');
     $result->post=$request->input('post');
        $result->save();
 
        $request->session()->flash('msg','Information updated');
        return redirect('/Admin/category');
    }

    
    public function destroy(Category $category,$id)
    {
        //
        Category::destroy(array('id',$id));
        return redirect('/Admin/category');
    }
}
