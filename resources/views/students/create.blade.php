@extends('layouts.layout')


@section('mainsection')
    <h1> Add new Student </h1>
{{--    <form action="/students" method="Post">--}}
    <form action={{route('students.store')}} method="Post">
        @csrf
        <div class="form-group">
            <label for="name">Student name</label>
            <input type="text" class="form-control"  name="name" id="name" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("name")}}</label>
        </div>
        <div class="form-group">
            <label for="email">Student Email</label>
            <input type="email" class="form-control"  name="email" id="email" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("email")}}</label>
        </div>
        <div class="form-group">
            <label for="track">Student track</label>
            <input type="text" class="form-control"  name="track" id="track" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("track")}}</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
