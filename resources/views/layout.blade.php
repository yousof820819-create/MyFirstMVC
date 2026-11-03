<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Test Project</title>
    <style>
        body { font-family: sans-serif; max-width: 750px; margin: 40px auto; padding: 0 10px;}
        input:not([type="checkbox"]) { display: block; width: 100%; box-sizing: border-box; padding: 6px; margin: 10px 0 10px; }
        /*input[type="checkbox"]{width:40%}*/
        label.remember { display: block; margin: 0 0 12px; }
        table { border-collapse: collapse; width: 100%; }
        td, th { border: 1px solid #2c8cbc; padding: 6px; text-align: left; }
        form.inline { display: inline; }
        .ok { color: green; }
        .err { color: crimson; }
    </style>
</head>
<body>
    @if (session('ok'))
        <p class="ok"> {{session('ok')}} </p>
    @endif

    @foreach( $errors-> all() as $error)
        <p class="err"> {{$error}} </p>
    @endforeach

@yield('content')
</body>
</html>

{{--    <body>--}}
{{--    @if (session('ok'))--}}
{{--        <p class="ok">{{ session('ok') }}</p>--}}
{{--    @endif--}}
{{--    @foreach ($errors->all() as $error)--}}
{{--        <p class="err">{{ $error }}</p>--}}
{{--    @endforeach--}}

{{--    @yield('content')--}}
{{--    </body>--}}
{{--</html>--}}
