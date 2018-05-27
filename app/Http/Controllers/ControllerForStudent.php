<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;
class ControllerForStudent extends Controller
{
    //
    public function  getFriendsList(){
        $stu = Student::all();
        return view('Db Testing.DBHOmes',compact('stu'));
    }
}
