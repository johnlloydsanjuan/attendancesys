<div class="background">
    <div class="login-content">
        <div class="container-glass">
            <div class="main-container">
                <div class="login-container">
                    <div class="text-top">
                        <h1>Login</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="input-container">
                        <x-input-float-label id="loginEmail" name="email">Email</x-input-float-label>
                        <x-input-float-label id="loginPassword" name="password" type="password">Password</x-input-float-label>
                        <div class="input-container2">
                            <input type="checkbox">
                            <p>Remember me</p>
                            <a href="{{ route('forgetpassword') }}">Forget Password?</a>
                        </div>
                    </div>
                    <div class="button-container">
                        <x-button class="button-primary" iconPosition="right">Login</x-button>
                        <div class="divider">or login with</div>
                        <x-button class="" icon="fa-brands fa-google">Google</x-button>
                    </div>
                    <p class="text-bottom">Do not have an account? <a href="{{ route('register') }}">Register</a> here.
                    </p>
                </div>
                <div class="info-container">
                    <div class="info-text-top">
                        <h2>Your most favorite and reliable Attendance System.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="sample-pics">
                        <div class="pic1"></div>
                        <div class="pic2"></div>
                        <div class="pic3"></div>
                    </div>
                    <div class="info-text-bottom">
                        <div class="logo">LOGO</div>
                        <p>© Copyrights claims @ 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
