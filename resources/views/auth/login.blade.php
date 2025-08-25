<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Hub</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/style_page_sign_in.css') }}">
    <link rel="icon" type="image/png" href="{{ asset ('build/assets/img/logo_practice_hub.png') }}"></link>

    <!-- font google! -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header-logo">
        <img src="{{ asset ('build/assets/img/logo_practice_hub-removebg-preview.png') }}" alt="" class="icon-header-logo">
        <span class="header-name"><strong>pratice hub</strong></span>
    </div>
    
    <div class="container">
        
        <div class="form-box" id="login-form">
            <form action="{{ route('authLogin') }}" method="POST">
                @csrf
                <p class="header-login">log in</p>
                <div class="input-user">
                    <input type="email" class="input-username" name="email" id="username" requireed placeholder="Username or Email">
                    <input type="password" class="input-password" name="password" id="password"  required placeholder="Password">
                    <div class="forg-pass">
                        <a href="{{ asset('') }}">Forgot Password?</a>
                    </div>
                </div>

                
                <button type="submit" name="login" class="btn-login">Login</button>
                <p class="part-sign-up">Don't have an account? <a href="{{ route('showSignup') }}">Sign Up</a></p>
                <!-- <div class="terms">
                    <p>By clicking continue, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></p>
                </div> -->
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
