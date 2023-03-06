<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin_panel;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;    
use App\Http\Controllers\Login;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("Admin",[Admin_panel::class, 'index']);

Route::view('Admin/layout','Admin.layout');

// Route::get("/Admin/view",[StudentController::class, 'show']);
// Route::get("/Admin/crud_delete/{id}",[StudentController::class,'destroy']);
// Route::get("/Admin/crud_create",[StudentController::class,'create']);
// Route::post("/Admin/crud_submit",[StudentController::class,'store']);
// Route::get("/Admin/crud_edit/{id}",[StudentController::class,'edit']);
// Route::post("/Admin/crud_update/{id}",[StudentController::class,'update'])->name('crud.update');

// Route::get("session_set",[Admin_panel::class, 'session_set']);
// Route::get("session_get",[Admin_panel::class, 'session_get']);
// Route::get("session_remove",[Admin_panel::class, 'session_remove']);

Route::view('Admin/login','Admin.login');
Route::post("Admin/login",[Login::class, 'enter']);

// middleware verify whether the user of application is authenticated or not
Route::group(['middleware'=>['Admin_auth']],function(){
    // users
    Route::get("/Admin/view",[StudentController::class, 'show']);
    Route::get("/Admin/crud_delete/{id}",[StudentController::class,'destroy']);
    Route::get("/Admin/crud_create",[StudentController::class,'create']);
    Route::post("/Admin/crud_submit",[StudentController::class,'store']);
    Route::get("/Admin/crud_edit/{id}",[StudentController::class,'edit']);
    Route::post("/Admin/crud_update/{id}",[StudentController::class,'update'])->name('crud.update');
    
});
// logout 
Route::get('/Admin/logout',function(){
session()->forget('USER_ID');
session()->flash('error','Logout successfully');
return redirect('/Admin/login');
});

// post 
Route::get("/Admin/post",[PostController::class, 'show']);
Route::get("/Admin/post_delete/{id}",[PostController::class,'destroy']);
Route::get("/Admin/add_post",[PostController::class,'create']);
Route::post("/Admin/post_submit",[PostController::class,'store']);
Route::get("/Admin/post_edit/{id}",[PostController::class,'edit']);
Route::post("/Admin/post_update/{id}",[PostController::class,'update'])->name('post.update');

// category
Route::get("/Admin/category",[CategoryController::class, 'show']);
Route::get("/Admin/category_delete/{id}",[CategoryController::class,'destroy']);
Route::get("/Admin/add_category",[CategoryController::class,'create']);
Route::post("/Admin/category_submit",[CategoryController::class,'store']);
Route::get("/Admin/category_edit/{id}",[CategoryController::class,'edit']);
Route::post("/Admin/category_update/{id}",[CategoryController::class,'update'])->name('category.update');

// Frontend
Route::view('Frontend/index','Frontend.index');

?>