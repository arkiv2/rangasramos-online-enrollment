<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller {

    public function index($id)
    {
        $student = Student::where('student_no', $id)->first();
        $subjects = $student->subjects;
        return view('students.home')->with([
            'student' => $student,
            'subjects' => $subjects
        ]);
    }
}
