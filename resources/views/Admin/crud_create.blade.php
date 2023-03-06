@extends('Admin.layout')
@section('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="col-lg-6 m-auto">
        <form action="crud_submit" method="POST">
            @csrf
            <div class="card mt-5">
                <div class="card-header bg-dark rounded-3">
                    <h1 class="text-white text-center">Insert Information</h1>
                </div>
                <br>
                <!-- <label>Student Name :</label>
                <input type="text" name="name" class="form-control" required>
                <br> -->
                <label>Email :</label>
                <input type="email" name="email" class="form-control" required>
                <br>
                <label>Password :</label>
                <input type="password" name="password" class="form-control" required>
                <br>
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
