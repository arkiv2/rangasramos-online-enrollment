<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

use App\Http\Requests;

class SectionController extends Controller {
    public function index($name)
    {
        $section = Section::where('section_name', $name)->first();
        $students = $section->students;
        $subjects = $section->subjects;
        return view('sections.home')->with([
            'section' => $section,
            'students' => $students,
            'subjects' => $subjects
        ]);
    }
}
