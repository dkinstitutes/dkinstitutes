<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class routescontroller extends Controller
{
    public function index(){
        return view('index');

    }


     public function fee(){
         return view('fee');
    }

}
