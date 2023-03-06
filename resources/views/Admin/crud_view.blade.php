@extends('Admin.layout')
@section('container')
    <!-- <div class="container"> -->
        <div class="col-lg-8" style="margin-left:300px;">
            <br><br>
            <h1 class="text-dark text-center">Student Information</h1>
            @if(session('msg'))
                <div class="alert alert-success" role="alert">
                    {{session('msg')}}
                </div>
                @endif
            <br>
            <a class="btn btn-outline-secondary " href="/Admin/crud_create" role="button">
                <i class="fa-solid fa-file-circle-plus"></i>
                Insert Data</a>
              
            <a class="btn btn-outline-secondary float-end" href="/Admin/logout" role="button"><i
                    class="fa-solid fa-right-from-bracket"></i> Logout</a>

            <table class="table table-striped table-hover table-bordered">
                <tr class="bg-dark">
                    <th class="text-white text-center">Id</th>
                    <th class="text-white text-center">Email Id</th>
                    <th class="text-white text-center">Password</th>
                    <!-- <th class="text-white text-center">Class</th>
                <th class="text-white text-center">Address</th> -->
                    <th class="text-white text-center">Edit</th>
                    <th class="text-white text-center">Delete</th>
                    <!-- <th class="text-white text-center">Profile Pic</th> -->
                </tr>
                
                    @foreach($infoArr as $info)
                    <tr class="text-center">
                       <td>{{$info->id}}</td>
                       <td>{{$info->email}}</td>
                       <td>{{$info->password}}</td>
                    <td><a href="/Admin/crud_edit/{{$info->id}}" class="edit text-white btn btn-primary" role="button">Edit</a></td>

                    <td><a href="/Admin/crud_delete/{{$info->id}}" class="delete text-white btn btn-danger" role="button"
                            onclick="return confirm('do you want to delete ?');">Delete</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    <!-- </div> -->
    @endsection