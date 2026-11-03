@extends('layout')
@section('content')

    <h1>
        Welcome
    </h1>
    <h2>
        <p> Login as admin : </p>
        <p> admin name = {{ $user_information->name }}</p>
        <p> last name = {{$user_information->last_name}}</p>
    </h2>

@endsection
