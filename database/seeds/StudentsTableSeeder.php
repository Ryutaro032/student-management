<?php

use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'grade'   => '3',
            'name'    => '山下',
            'address' => '東京都',
            'comment' => '山下 美月です。',
        ]);
        Student::create([
            'grade'   => '2',
            'name'    => '田村',
            'address' => '埼玉県',
            'comment' => '田村 真佑です。',
        ]);
        Student::create([
            'grade'   => '1',
            'name'    => '井上',
            'address' => '神奈川県',
            'comment' => '井上 和です。',
        ]);
    }
}
