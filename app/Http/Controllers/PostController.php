<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
        return view('Admin.add_post');
    }

   
    public function store(Request $request)
    {
        //
        // $result = new Post;
        // $result->title=$request->input('title');
        // $result->description=$request->input('description');
        // $result->category=$request->input('category');
        // $result->author=$request->input('author');
        // $result->save();
 
        // $request->session()->flash('msg','Information inserted');
        // return redirect('/Admin/post');
        $storeData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'category' => 'required|max:255',
            'author' => 'required|max:255',
        ]);
        $student = Post::create($storeData);
        return redirect('/Admin/post')->with('msg','Information inserted');
    }

   
    public function show(Post $post)
    {
        //
        return view('Admin.post')->with('postArr',Post::all());
    }

  
    public function edit(Post $post,$id)
    {
        //
        return view('Admin.post_edit')->with('post',Post::find($id));
    }

    
    public function update(Request $request, Post $post)
    {
        //
        $result = Post::find($request->id);
        $result->title=$request->input('title');
        $result->description=$request->input('description');
        $result->category=$request->input('category');
        $result->save();
 
        $request->session()->flash('msg','Information updated');
        return redirect('/Admin/post');
    }

    public function destroy(Post $post,$id)
    {
        //
         Post::destroy(array('id',$id));
        return redirect('/Admin/post');
    }
}
