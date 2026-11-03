@extends('layout')
@section('content')
    <form method="post" , action="/register">
        @csrf

        Name :
        <input name="name" value="{{ old('name') }}" >

        Last Name :
        <input name="last_name" value="{{ old('last_name') }}">

        Phone Number :
        <input name="phone_number" value="{{ old('phone_number') }}">

        Email :
        <input name="email" value="{{ old('email') }}">

        Password :
        <input name="password" type="password">

        Confirmation Password :
        <input name="confirmation" type="password">

        <button> Confirm </button>

    </form>

@endsection
