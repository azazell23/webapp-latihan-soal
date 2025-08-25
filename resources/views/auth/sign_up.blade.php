<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Hub</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/style_page_sign_up.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('build/assets/img/logo_practice_hub.png') }}"></link>

    <!-- font google! -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header-logo">
        <img src="{{ asset('build/assets/img/logo_practice_hub-removebg-preview.png') }}" alt="" class="icon-header-logo">
        <span class="header-name"><strong>pratice hub</strong></span>
    </div>

    <div class="container">
        <div class="form-box" id="login-form">
            <form action="{{ route('authSignup') }}" method="POST">
                @csrf   
                <p class="header-sign-up">create an account</p>
                <div class="input-user">
                    <input type="username" class="input-username" name="username" id="username" required placeholder="Username">
                    <input type="email" class="input-email" name="email" id="email" required placeholder="Email">
                    <input type="password" class="input-password" name="password" id="password"  required placeholder="Password">
                    <input type="password" class="input-conf-pass" name="password_confirmation" id="confirm-password" required placeholder="Confirm Password">
                </div>

        
                <button type="submit" name="login" class="btn-sign-up">Continue</button>
                <p class="part-log-in">Already Have an Account? <a href="{{ route('showLogin') }}">Log In</a></p>
                <!-- <div class="terms">
                    <p>By clicking continue, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>
                </div> -->
            </form>
        </div>
    </div>
    
</body>
</html>
