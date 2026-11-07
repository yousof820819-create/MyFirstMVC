@extends('layout')
@section('content')

    <form action="edit/{action}">
        @csrf
        <p>PERVIOUS {{$field}} : {{$edit_user->$field}}</p>
        <p>New {{$field}}</p>
        <input name="new_{{$field}}">

        <button>Confirm</button>
    </form>

@endsection
