@extends('layout')
@section('content')
    <h1>edit page</h1>
    <h3>
        <table border="5">
            <tr>
                <th>SUBJECT</th>
                <th>VALUE</th>
                <th>EDIT</th>
            </tr>
            <tr>
                <td>First Name</td>
                <td>{{$edit_user->name}}</td>
                <td><a href="/edit/{{$edit_user->id}}/name">edit</a></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{$edit_user->last_name}}</td>
                <td><a href="/edit/{{$edit_user->id}}/last_name">edit</a></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>{{$edit_user->email}}</td>
                <td><a href="/edit/{{$edit_user->id}}/email">edit</a></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{$edit_user->phone_number}}</td>
                <td><a href="/edit/{{$edit_user->id}}/email">edit</a></td>
            </tr>

        </table>
    </h3>



@endsection
