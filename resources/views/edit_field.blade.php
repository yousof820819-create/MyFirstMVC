@extends('layout')
@section('content')

    <form method="post" action="/edit/{{$edit_user->id}}/{{$field}}">
        @csrf
        <p>PERVIOUS {{$field}} : {{$edit_user->$field}}</p>
        <p>New {{$field}}</p>
        <input name="new_{{$field}}">

        <button>Confirm</button>
    </form>

    <a href="/edit/{{$edit_user->id}}"> Back </a>
@endsection
