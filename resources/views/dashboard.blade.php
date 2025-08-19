<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Hub</title>
    <link rel="stylesheet" href="{{ asset('build/assets/css/style-dashboard.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('build/assets/img/logo_practice_hub.png') }}"></link>

    <!-- font google! -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Sidebar -->
    <div class="container">
        <nav class="sidebar">
            <div class="header-logo">
                <img src="{{ asset('build/assets/img/logo_practice_hub-removebg-preview.png') }}" alt="" class="icon-header-logo">
                <span class="header-name"><strong>pratice hub</strong></span>
            </div>
            <div class="sidebar-list-menu">
                <ul class="list-menu">
                    <a href="#" class="list-main-dashboard">
                        <img src="{{ asset('build/assets/img/VecDashboard.svg') }]" alt="" class="icon-dashboard">
                        <p>Dashboard</p>
                    </a>
                    <a href="#" class="list-main-search">
                        <img src="{{ asset('build/assets/img/VecSearch.svg') }}" alt="" class="icon-search">
                        <p>Search</p>
                    </a>
                    <a href="#" class="list-main-myPractice">
                        <img src="{{ asset('build/assets/img/VecMyPractice.svg') }}" alt="" class="icon-myPractice">
                        <p>My Practices</p>
                    </a>
                </ul>
            </div>
        </nav>
        <nav class="navigasi">
            <div class="call-username">
                <p class="header-nav">Hii, <span id="username"></span></p>
            </div>
            <div class="u-user">
                <div class="notification">
                    <a href="#" class="notif">
                        <img src="{{ asset('build/assets/img/VectorNotifikasi.png') }}" alt="" class="icon-notif">
                    </a>
                </div>
                <div class="profile">
                    <a href="">
                        <img src="{{ asset('build/assets/img/VecProfile.svg') }}" class="icon-user-pic">
                        <span></span>
                    </a>
                </div>

                <div class="sub-menu">
                    <div class="sub-menu-main">
                        <div class="user-info">
                            <img src="{{ asset('build/assets/img/VecProfile.svg') }]">
                            <span>sih kecap manis</span>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
    </div>

    <script src="script.js"></script>
</body>
</html>