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
        <form action="post_submit" method="POST">
            @csrf
            <div class="card mt-5">
                <div class="card-header bg-dark rounded-3">
                    <h1 class="text-white text-center">Insert Information</h1>
                </div>
                <br>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"> Description</label>
                    <textarea name="description" class="form-control" rows="5" id="editor" ></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Author</label>
                    <textarea name="author" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <select name="category" class="form-select" aria-label="Default select example">
                        <option selected>Select Category</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Health">Health</option>
                        <option value="Politics">Politics</option>
                    </select>
                </div>

                <button class="btn btn-success" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
    @endsection