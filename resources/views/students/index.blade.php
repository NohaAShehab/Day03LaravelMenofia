@extends('layouts.layout')

@section("mainsection")

    <h2>Students </h2>
    <table class="table table-striped ">
        <tr  class="bg-info">
            <th>
                Student Name
            </th>
            <th>
                Student Email
            </th>
            <th>
                Track
            </th>

            <th>
                Show
            </th>
            <th>
                Edit
            </th>
            <th>
                Delete
            </th>
        </tr>

       @foreach($students as $student )
                <td>
                {{$student["name"]}}
                </td>
                <td>
                    {{$student["email"]}}
                </td>
                <td>
                    {{$student["track"]}}
                </td>

                <td>
{{--                    <a class="btn btn-success" href="/students/{{$student['id']}}">Show</a>--}}
                    <a class="btn btn-success" href="{{route("students.show",$student)}}">Show</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="/students/{{$student['id']}}/edit">Edit</a>
                </td>
                <td>
                    <form action="/students/{{$student['id']}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Delete"  class="btn btn-danger" >
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="btn btn-info" href="/students/create">Add student</a>






@endsection
