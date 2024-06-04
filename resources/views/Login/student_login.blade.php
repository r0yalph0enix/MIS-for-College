@extends('layouts.master_login')

@push('title')
<title>Student Login</title>
@endpush
@section('main-section')

            <!-- login form -->
        
    <div class="background-section">
            <div class="login-box">
                <form action="/studentdashboard">
                    <h2>Student Login</h2>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" id="emailInput" required autocomplete="off">
                        <label>Email</label>
                    </div>
                    <p id="emailError" class="error-message" style="font-size: 12px; color: red; text-align: center;"></p> <!-- Error message placeholder -->
                    
                    <div class="input-box">
                        <span class="pass-icon"><ion-icon name="eye-off-outline"></ion-icon></span>
                        <input type="password" required id="MyInput"    onclick="validateEmail()">
                        <label>Password</label>
                    </div>
                    <p id="emailError" class="error-message" style="font-size: 12px; color: red; text-align: center;"></p> <!-- Error message placeholder -->
                    
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="/EmailVerification">Forgot Password?</a>
                    </div>
                    <button type="submit">Login</button> <!-- Use type="button" to prevent form submission -->
                    <div class="register-link">
                        <p class="Register">Not Registered Yet?&emsp;<a href="/registration">Register Now</a></p>
                    </div>
                </form>
            </div>
    </div>
    @endsection