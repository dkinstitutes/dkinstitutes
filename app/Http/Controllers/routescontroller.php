<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class routescontroller extends Controller
{
    public function index(){
        return view('index');

    }


     public function forms(){
         return view('forms');
    }


     public function thank(Request $request){

        $data = $request->all();

        $stud = new Student();

        $stud->Name = $data["name"];
        $stud->City = $data["city"];
        $stud->Adress = $data["adress"];
        $stud->CNIC = $data["cnic"];
        $stud->Birthday = $data["birthday"];
        $stud->Email = $data["email"];
        $stud->Phone = $data["phone"];
        $stud->Subject = $data["subject"];

        $stud->save();



         return view('thank');
    }
}
