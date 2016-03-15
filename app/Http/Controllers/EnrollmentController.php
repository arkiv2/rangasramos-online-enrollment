<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EnrollmentController extends Controller {
    public function index()
    {
        return view('enrollment.home');
    }
}