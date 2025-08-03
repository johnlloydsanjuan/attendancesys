<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/importants/myBuiltinFramework.css') }}" rel="stylesheet">
    <link href="{{ asset('css/importants/components.css') }}" rel="stylesheet">
    @include('templates.css-call')
    <title>{{ $htmlTitle }}</title>
</head>

<body class="bg-primary">

    @switch($goInto)
        @case('login')
            @include('login')
        @break

        @default

    @endswitch

    <script src="{{ asset('js/jQuery/jquery-3.7.1.min.js') }}"></script>
    @include('')
</body>

</html>
