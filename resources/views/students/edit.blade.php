@extends('layouts.layout')


@section('mainsection')
    <h1> Edit department </h1>
    <form action="/students/{{$student['id']}}" method="post">
        @csrf
        @method("put")

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{$student['name']}}" class="form-control"  name="name" id="dept_name" aria-describedby="dept_nameHelp">
            <label class="text-danger"> {{$errors->first("name")}}</label>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" value="{{$student['email']}}" class="form-control"
                   name="email" id="email" aria-describedby="dept_descHelp">
            <label class="text-danger"> {{$errors->first("email")}}</label>
        </div>
        <div class="form-group">
            <label for="track">Email</label>
            <input type="text" value="{{$student['track']}}" class="form-control"
                   name="track" id="track" aria-describedby="dept_descHelp">
            <label class="text-danger"> {{$errors->first("track")}}</label>
        </div>

        <button type="submit"  class="btn btn-primary">Submit</button>
    </form>

@endsection
