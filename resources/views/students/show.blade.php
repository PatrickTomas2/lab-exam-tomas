@extends('layout')

@section('content')
    <h2>{{ $student->name }}</h2>
    <p>Email: {{ $student->email }}</p>
    <p>Course: {{ $student->course->name }}</p>
    <a href="{{ route('students.index') }}">Back</a>
@endsection