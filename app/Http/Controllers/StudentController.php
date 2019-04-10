<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Multiple;

class StudentController extends Controller
{
  public function index(){
    return view('welcome');
  }
  public function admin(){
    return view('admin');
  }
  public function approve(\App\User $user){
    $user->approved=1;
    $user->save();
    return redirect()->back();
  }
  public function dashboard(){
    $users = \App\User::all();
  return view('dashboard')->with(['users'=>$users]);
  }
  public function log(){
    if(\Auth::user()->approved==0)
    abort(404);
    return view('log');
  }
  public function studentslogin(){
    return view('students_login');
  }

  public function students_loginPost(Request $request)
  {
    $credentials = $request->only('id','password');
    if(\Auth::guard('abcs')->attempt($credentials)){
      return redirect('/data');
    }
    session()->flash('f',1);
    return redirect()->back();

  }

  public function studentsregister(){

    return view('students_register');
  }


  public function login(){
    return view('login');
  }
  public function data(){
        $students = Student::all();
  return view('data')->with('students',$students);
}

  public function store( Request $request)
  {
    $student = new Student;
    $student->id = $request->id;
    $student->Student_name = $request->Student_name;
    $student->Subject_code=$request->Subject_code;
    $student->first_tt_marks=$request->first_tt_marks;
    $student->second_tt_marks=$request->second_tt_marks;
    $student->first_part_marks=$request->first_part_marks;
    $student->second_part_marks=$request->second_part_marks;
    $student->attendence_marks=$request->attendence_marks;
    $student->Comments = $request->Comments;
    $student->save();
   return redirect()->route('data');
    //insert data into student table
  }

  public function invoice()
  {
    return view('invoice');
  }
}
