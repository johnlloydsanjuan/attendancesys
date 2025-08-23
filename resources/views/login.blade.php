<div class="background">
    <div class="login-content">
        <div class="container-glass">
            <div class="main-container">
                <div class="login-container">
                    <div class="text-container">
                        <h1>Login</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="input-container">
                        <x-input-float-label name="email" inputTitle="Email"></x-input-float-label>
                        <x-input-float-label name="password" inputTitle="Password" type="password"></x-input-float-label>
                        <div class="input-container2">
                            <input type="checkbox">
                            <p>Remember me</p>
                        </div>
                        <a href="{{ route('forgetpassword') }}">Forget Password?</a>
                    </div>
                    <p class="text-bottom">Do not have an account? <a href="{{ route('register') }}">Register</a> here.</p>
                </div>
                <div class="info-container">

                </div>
            </div>
        </div>
    </div>
</div>
