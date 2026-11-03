@extends('layout')
@section('content')

<h2>
    Log in
</h2>


@if(session('success'))
    <p style="color: #5d8823">{{session('success')}}</p>


@elseif(session('failure'))
    <p style="color: #d62719"> {{session('failure')}} </p>


@endif



<form method="post" action="/login">

    @csrf

    Email :
    <input name="email" value="{{ old('email') }} ">

    Password :
    <input name="password" type="password">

    <label class="remember">
        <input type="checkbox" name="remember"> Remember me
    </label>

    <button>
        Login
    </button>
</form>


<p><a href="/register"> Create an account </a></p>
@endsection
