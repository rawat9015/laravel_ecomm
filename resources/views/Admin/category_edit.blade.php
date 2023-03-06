@extends('Admin.layout')
@section('container')
  <div id="admin-content" style="margin-left:450px;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="adin-heading"> Update Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <form action="{{route('category.update',[$category->id])}}" method ="POST">
                    @csrf
                      <div class="form-group">
                          <input type="hidden" name="category_id"  class="form-control" value="" placeholder="">
                      </div>
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="category" class="form-control" value="{{$category->category_name}}"  placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>No. of posts</label>
                          <input type="text" name="post" class="form-control" value="{{$category->post}}"  placeholder="" required>
                      </div>
                      <input type="submit" name="sumbit" class="btn btn-primary btn-lg" value="Update" required />
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
          @endsection
         
