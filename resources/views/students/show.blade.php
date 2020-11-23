@extends('layouts.layout')


@section('mainsection')
    <h1>  Department Info </h1>

        <table class="table table-bordered">
        <tr>
            <th > ID</th>
            <td> {{$student["id"]}} </td>
        </tr>
        <tr>
            <th >Name</th>
            <td> {{$student["name"]}} </td>
        </tr>

        <tr>
            <th >Email</th>
            <td> {{$student["email"]}}</td>
        </tr>

        <tr>
            <th >Track</th>
            <td> {{$student["track"]}}</td>
        </tr>

        <tr>
            <th > Created at</th>
            <td> {{$student["created_at"]}}  </td>
        </tr>
        <tr>
            <th>Updated at </th>
            <td> {{$student["updated_at"]}} </td>
        </tr>
    </table>
    <a class="btn btn-info" href="/students">Back</a>



@endsection
