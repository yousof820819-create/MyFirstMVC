@extends('layout')
@section('content')
    <h1>edit page</h1>
    <h3>
        <table border="5">
            <tr>
                <th>subject</th>
                <th>value</th>
                <th>edit</th>
            </tr>
            <tr>
                <td>First Name</td>
                <td>{{$edit_user->name}}</td>
                <td><a href="">edit</a></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{$edit_user->last_name}}</td>
                <td><a href="">edit</a></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>{{$edit_user->email}}</td>
                <td><a href="">edit</a></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{$edit_user->phone_number}}</td>
                <td><a href="">edit</a></td>
            </tr>

        </table>
    </h3>



@endsection
