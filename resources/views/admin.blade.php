@extends('layout')
@section('content')

    <h1>
        Welcome
    </h1>
    <h2>
        <p> Login as admin : </p>
{{--        <p> admin name = {{ $user_information->name }}</p>--}}
{{--        <p> last name = {{$user_information->last_name}}</p>--}}
        <p>Admin name = {{$admin_name}}</p>
    </h2>

    <h3>Users Information count = {{$all_users->count()}}</h3>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email Address</th>
            <th>Phone Number</th>
            <th>Registered At</th>
            <th>Lats Update</th>
        </tr>
        @foreach(@$all_users as $this_user)
            <tr>
                <th>{{$this_user->name}}</th>
                <th>{{$this_user->last_name}}</th>
                <th>{{$this_user->email}}</th>
                <th>{{$this_user->phone_number}}</th>
                <th>{{$this_user->created_at}}</th>
                <th>{{$this_user->updated_at}}</th>
                <th>{{@isset($this_user->deleted_at)}}</th>
            </tr>
        @endforeach
    </table>




@endsection
