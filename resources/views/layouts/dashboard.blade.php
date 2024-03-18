<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div class="dashboard">
        <div class="header">
            <div class="menu-container">
                <!-- Three divs for the three lines of the menu icon -->
                <div class="menu-icon"></div>
                <div class="menu-icon"></div>
                <div class="menu-icon"></div>
            </div>
        </div>
        <div class="profile">
            <img src="{{ asset('asset/tristan.png') }}" alt="Tristan Image" width="60" height="60">
            <div>
                <p>Hello, Tristan L. Parajes</p>
                <button>PROFILE</button>
            </div>
        </div>
        <div class="button" id="advertButton">
            <img src="{{ asset('asset/plusicon.png') }}" width="40" height="40">
            <div>
                <p><strong>Create an advert</strong></p>
                <div class="text">
                    <p style="padding-right: 20px;">Report you find or lost an item</p>
                </div>
            </div>
        </div>
        <div class="button" id="lostFoundButton">
            <img src="{{ asset('asset/suitcase.png') }}" width="40" height="40">
            <div>
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
