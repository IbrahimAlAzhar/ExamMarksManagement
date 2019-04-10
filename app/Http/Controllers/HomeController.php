<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Student;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

      if(\Auth::user()->role==0){
        return redirect('/data');
      }
       if(\Auth::user()->role==1){
        return view ('home');
      }
      if(\Auth::user()->role==2){
        
        return redirect('/dashboard');
      }


    }



}
