@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="center-block"><h1>{{ $student->last_name }}
                    , {{ $student->first_name }} {{ $student->middle_name }}</h1></div>
        </div>
        <div class="row">
            <div class="container col-md-6">
                <h2 class="text-center">Subjects: <span class="label label-default">{{ $subjects->count() }}</span></h2>
                <ul class="list-group">
                    @foreach($subjects as $subject)
                        <li class="list-group-item">
                            <span class="badge">{{ $subject->subject_code }}</span>
                            <a href="/subject/{{ $subject->subject_code }}">{{ ucfirst($subject->subject_name) }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection