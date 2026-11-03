@extends('layout')
@section('content')
@use('App\Models\User')


<h1>
    Information
</h1>
    <h2>
        <?php User::var_print($data) ?>
    </h2>
@endsection
