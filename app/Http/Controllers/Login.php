<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    // 
    public function enter(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $result = DB::table('students')->where('email' ,'=', $email)->where('password' ,'=', $password)->get();

        // echo"<pre>";
        // print_r($result);

        if(isset($result[0]->id)){
            $request->session()->put('USER_ID',$result[0]->id);
           return redirect('/Admin/view');
        }
        else{
           $request->session()->flash('msg',"please enter correct information");
           return redirect('Admin/login');
        }
}

}
