<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AbcController extends Controller
{
  public function storeS(Request $request)
  {
    $multiple = new User;
    $multiple->Reg_id = $request->student_id;
    $multiple->name= $request->name;
    $multiple->first_name = 'abc';
    $multiple->last_name = 'def';
    $multiple->username = 't'.time();
    $multiple->email = $request->email;
    $multiple->role= 0;
    $multiple->password = \Hash::make($request->password);
    $multiple->save();
    return redirect()->route('studentslogin');
  }
  public function studentsregister()
  {
    return view('students_register');
  }
}
