@switch($goInto)
    @case("login")
        <script src="{{ asset('js/onboarding/login.js') }}"></script>
    @break
    @case("register")
        <script src="{{ asset('js/onboarding/register.js') }}"></script>
    @break
    @case("forgetpassword")
        <script src="{{ asset('js/onboarding/forgetpassword.js') }}"></script>
    @break

    @default

@endswitch
