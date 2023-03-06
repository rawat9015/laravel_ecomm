@extends('Admin.layout')
@section('container')
<div class="col-lg-8" style="margin-left:300px;">
            <br><br>
            <h1 class="text-dark text-center">Category Information</h1>
            @if(session('msg'))
                <div class="alert alert-success" role="alert">
                    {{session('msg')}}
                </div>
                @endif
            <br>
            <a class="btn btn-outline-secondary " href="/Admin/add_category" role="button">
                <i class="fa-solid fa-file-circle-plus"></i>
                Insert Data</a>
              
            <a class="btn btn-outline-secondary float-end" href="/Admin/logout" role="button"><i
                    class="fa-solid fa-right-from-bracket"></i> Logout</a>

            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark">
                    <th class="text-white text-center">S.No</th>
                    <th class="text-white text-center">Category Name</th>
                    <!-- <th class="text-white text-center">description</th> -->
                    <th class="text-white text-center">No. of post</th>
                    <th class="text-white text-center">Edit</th>
                    <th class="text-white text-center">Delete</th>
                    <!-- <th class="text-white text-center">Profile Pic</th> -->
                </tr>
                
                    @foreach($categoryArr as $category)
                    <tr class="text-center">
                       <td>{{$category->id}}</td>
                       <td>{{$category->category_name}}</td>
                       <td>{{$category->post}}</td>
                    <td><a href="/Admin/category_edit/{{$category->id}}" class="edit text-white btn btn-primary" role="button">Edit</a></td>

                    <td><a href="/Admin/category_delete/{{$category->id}}" class="delete text-white btn btn-danger" role="button"
                            onclick="return confirm('do you want to delete ?');">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
  @endsection
