@extends('Admin.layout')
@section('container')
<div id="admin-content" style="margin-left:450px">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Post</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">
      
        <!-- Form for show edit-->
        <form action="{{route('post.update',[$post->id])}}" method="POST" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="title"  class="form-control" id="exampleInputUsername" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="description" class="form-control"  required rows="5">
                {{$post->description}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                  <option disabled> Select Category</option>
                  <option value="{{$post->category}}">{{$post->category}}</option>
                  <option value="Web Development">Web Development</option>
                        <option value="Health">Health</option>
                        <option value="Politics">Politics</option>
                </select>
            </div>

            <input type="submit" name="submit" class="btn btn-primary btn-lg"/>
        </form>
        <!-- Form End -->
      
      </div>
    </div>
  </div>
</div>
@endsection
