@extends('layout')
@section('content')

    <form>
        <p>Last Name : {{$edit_user->name}}</p>

        <p>  </p>
        <p>New Name</p>
        <input name="new_name">

        <button>Confirm</button>
    </form>

@endsection
