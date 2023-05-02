<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        // $model = new Student();
        // $students = $model->getList();
        $students = Student::all();

        return view('list',['students' => $students]);
    }

    public function studentRegister(){
        return view('register');
    }

    public function personalInfo(){
        $students = Student::all();
        return view('person',['students' => $students]);
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
