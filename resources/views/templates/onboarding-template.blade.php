<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="image/x-icon" href="{{ asset('mddrmo_favicon.ico') }}" rel="icon">
    <link href="{{ asset('css/myBuiltinFramework.css') }}" rel="stylesheet">
    <title>
        @php
            if($goInto == "login"){
                echo "Login - Attendance System";
            } elseif ($goInto == "register") {
                echo "Register - Attendance System";
            } else {
                echo "Forgot Password - Attendance System";
            }
        @endphp
    </title>
</head>

<body class="bg-primary">

    @if ($goInto == "login")
        @include('login')

    @elseif ($goInto == "register")


    @endif


    <script src="{{ asset('js/jQuery/jquery-3.7.1.min.js') }}"></script>
    <script>

    </script>
</body>

</html>
