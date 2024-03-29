@extends('layouts.dashboard')

@section('content')

<div class="main-container d-flex">

    <div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-center">
        <h1 class="fs-4">
            <img src="{{ asset('asset/Ellipse 63.png') }}" alt="Lost & Found Logo" width="80" height="80" class="me-2">
            <p>Lost & Found</p>
        </h1>

        <!-- Menu Button -->
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white" id="menuButton">
            <img src="{{ asset('asset/menu.png') }}" alt="Menu" width="24" height="24">
        </button>
    </div>

    <ul class="list-unstyled px-2">
        <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Dashboard</a></li>
        <li><a href="http://127.0.0.1:8000/profile/" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i> Profile</a></li>
        <li>
            <a href="http://127.0.0.1:8000/message/? " class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                <span><i class="fal fa-comment"></i> Messages</span>

            </a>

        <li><a href="http://127.0.0.1:8000/user/adverts#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i>Create an Advert</a></li>
        <li><a href="http://127.0.0.1:8000/lostitem/" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i>Lost and Found Items</a></li>&nbsp;&nbsp;

        <li class="logout-link"><a href="http://127.0.0.1:8000/user/logout" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Logout</a></li>
            </ul>
        </ul>
    </div>





        <div class="content">
    <div class="col-md-4x">
        <div class="profile">
            <img src="{{ asset('asset/tristan.png') }}" alt="Tristan Image" width="60" height="60">
            <div>
                <p>Hello, Tristan L. Parajes</p>
                <a href="{{ asset('profile') }}" class="btn btn-light">Profile</a>
            </div>
        </div>
        <div class="button" id="advertButton">
            <img src="{{ asset('asset/plusiCon.png') }}"  width="40" height="40">
            <div>
                <p><strong>Create an advert</strong></p>
                <div class="text">
                    <p style="padding-right: 20px;">
                        <a href="{{ asset('user/adverts') }}" style="color: maroon;">Report you find or lost an item</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="button" id="lostFoundButton">
            <img src="{{ asset('asset/suitcase.gif') }}" width="40" height="40">
            <div>
                <p><strong>LOST & FOUND ITEM</strong></p>
                <p style="padding-right: 20px;">
                    <a href="{{ asset('lostitem') }}" style="color: maroon;">Go through the lost and found items</a>
                </p>
            </div>
        </div>
    </div>
</div>


@endsection


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebarItems = document.querySelectorAll('.sidebar li');

        sidebarItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Remove active class from all sidebar items
                sidebarItems.forEach(function(item) {
                    item.classList.remove('active');
                });

                // Add active class to the clicked sidebar item
                this.classList.add('active');
            });
        });
    });

    function logout() {
    // Here you can add your logout logic, such as clearing session or cookies
    // For demonstration, I'm just showing a message and asking to login again
    document.getElementById("logoutMessage").innerHTML = "Successfully logged out. Do you want to <a href='login.html'>login again</a>?";
}

    </script>
