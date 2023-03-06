@extends('Admin.layout')
@section('container')
  <div id="admin-content" style="margin-left:450px">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="category_submit" method="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="category" class="form-control" placeholder="Category Name" required>
                      </div>
                      <div class="form-group">
                          <label>Posts</label>
                          <input type="text" name="post" class="form-control" placeholder="No. of posts" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary btn-lg" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
 
  @endsection 
