@switch($goInto)
    @case("login")
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    @break

    @default

@endswitch
