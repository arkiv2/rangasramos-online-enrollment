@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="center-block"><h1>{{ ucfirst($subject->subject_name) }}</h1></div>
        </div>
        <div class="row">
            <div class="container col-md-6">
                <h2 class="text-center">Enrolled Students: <span class="label label-default">{{ $students->count() }}</span></h2>
                <ul class="list-group">
                    @foreach($students as $student)
                        <li class="list-group-item">
                            <span class="badge">{{ $student->student_no }}</span>
                            <a href="/student/{{ $student->student_no }}">{{ $student->last_name }}
                                , {{ $student->first_name }} {{ $student->middle_name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection