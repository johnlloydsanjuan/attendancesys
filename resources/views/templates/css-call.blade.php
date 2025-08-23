@switch($goInto)
    @case("login")
        <link href="{{ asset('css/onboarding/login.css') }}" rel="stylesheet">
    @break
    @case("register")
        <link href="{{ asset('css/onboarding/login.css') }}" rel="stylesheet">
    @break
    @case("forgetpassword")
        <link href="{{ asset('css/onboarding/login.css') }}" rel="stylesheet">
    @break

    @default

@endswitch
