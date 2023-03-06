<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
   
    public function index()
    {
        //
        
    }

   
    public function create()
    {
        //
        return view('Admin.crud_create');
    }

   
    public function store(Request $request)
    {
        //
    //    $result = new Student;
    //    $result->email=$request->input('email');
    //    $result->password=$request->input('password');
    //    $result->save();

    //    $request->session()->flash('msg','Information inserted');
    //    return redirect('/Admin/view');
    $storeData = $request->validate([
        'email' => 'required|max:255',
        'password' => 'required|max:255',
    ]);
    $student = Student::create($storeData);
    return redirect('/Admin/view')->with('msg','Information inserted');
    }

    public function show(Student $student)
    {
        // 
        return view('Admin.crud_view')->with('infoArr',Student::all());

    }

   
    public function edit(Student $student,$id)
    {   
        //
        // return view('Admin.crud_edit')->with('info',Student::find($id));
        $student = Student::findOrFail($id);
        return view('Admin.crud_edit', compact('student'));

    }

   
    public function update(Request $request, $id)
    {
        //
          //
    //    $result = Student::find($request->id);
    //    $result->email=$request->input('email');
    //    $result->password=$request->input('password');
    //    $result->save();

    //    $request->session()->flash('msg','Information updated');
    //    return redirect('/Admin/view');

    $updateData = $request->validate([
        'email' => 'required|max:255',
        'password' => 'required|max:255',
    ]);
    Student::whereId($id)->update($updateData);
    return redirect('/Admin/view')->with('completed', 'Student has been updated');
    }

    
    public function destroy(Student $student,$id)
    {
        //
        // Student::destroy(array('id',$id));
        // return redirect('/Admin/view');
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect('/Admin/view')->with('completed', 'Student has been deleted');
    }
}
