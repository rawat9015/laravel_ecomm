<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset ('assets/frontend/css/blog.css')}}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Custom stlylesheet -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>
<!-- HEADER -->

<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                <ul class='menu'>
                    <!-- while loop for multiple category -->
                <li><a class='{$active}' href='<?php echo "index.php";?>'>Home</a></li>
                  <li><a href="">Login</a></li>
                  <li><a href="">logout</a></li>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
