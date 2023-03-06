@extends('Admin.layout')
@section('container')

<div class="col-lg-6 m-auto">
    <form action="{{route('crud.update',[$student->id])}}" method ="POST">
    @csrf
    <div class="card mt-5">
        <div class="card-header bg-dark rounded-3">
        <h1 class="text-white text-center">Edit Information</h1>
        </div>
        <br> 
        <label>Email:</label>
        <input type="email" name="email" class="form-control" value="{{$student->email}}">
        <br>
        <label>Password:</label>
        <input type="password" name="password" class="form-control" value="{{$student->password}}">
        <br>
        <button class="btn btn-success" type="submit" name="submit">Submit</button>
    </div>
    </form>
</div>
@endsection