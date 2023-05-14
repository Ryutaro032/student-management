<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
         $model = new Student();
         $students = $model->getList();

        return view('list',['students' => $students]);
    }

    public function studentRegister(){
        return view('register');
    }
    
    public function personalInfo($id){
        $model   = new Student();
        $student = $model->getList()->find($id);

        return view('person',['student' => $student]);
    }

    public function personalEdit(){
        return view('edit');
    }

    public function gradesAdd(){
        return view('gradesAdd');
    }

    public function gradesEdit(){
        return view('edit');
    }
}
