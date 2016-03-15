<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

use App\Http\Requests;

class SubjectController extends Controller
{
    public function index($code) {
        $subject = Subject::where('subject_code', $code)->first();
        $students = $subject->students;
        return view('subjects.home')->with([
            'subject' => $subject,
            'students' => $students
        ]);
    }
}
