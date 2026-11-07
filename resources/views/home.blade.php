@extends('layout')
@section('content')

<h1>
    Welcome {{$user_information->name}}
</h1>

{{--    <h2>--}}
{{--        <p>name  ---> {{$user_information->name}}</p>--}}

{{--        <p>Last Name ---> {{$user_information->last_name}}</p>--}}

{{--        <p>Email ---> {{$user_information->email}}</p>--}}

{{--        <p>Phone Number ---> {{$user_information->phone_number}}</p>--}}

{{--    </h2>--}}
<th>
    <ta>
        name  ---> {{$user_information->name}}
    </ta>
</th>



@endsection
