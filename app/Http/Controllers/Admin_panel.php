<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_panel extends Controller
{
    //
    function index() {
        return view("Admin.header").view("Admin.index").view("Admin.footer");
    }
    function session_set(Request $request) {
       $request->session()->put('name','neha');
    }
    function session_get(Request $request) {
         echo $request->session()->get('name');
    }
    function session_remove(Request $request) {
        $request->session()->forget('name');
   }

   
}

