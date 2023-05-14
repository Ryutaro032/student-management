<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'grade',
        'name',
        'address',
        'img_path',
        'comment',
        'created_at',
        'updated_at'
    ];

    public function getList(){
        $students = Student::all();
        return $students;
    }
}
