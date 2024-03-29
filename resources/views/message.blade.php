@extends('layouts.message')

@section('content')
<div class="main-container d-flex">
    <!-- Sidebar -->
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
            <li><a href="http://127.0.0.1:8000/dashboard/" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Dashboard</a></li>
            <li><a href="http://127.0.0.1:8000/profile/" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i> Profile</a></li>
            <li class="active">
                <a href="http://127.0.0.1:8000/message/? " class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fal fa-comment"></i> Messages</span>
                </a>
            </li>
            <li><a href="http://127.0.0.1:8000/user/adverts#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i>Create an Advert</a></li>
            <li><a href="http://127.0.0.1:8000/lostitem/" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i>Lost and Found Items</a></li>&nbsp;&nbsp;

            <li class="logout-link"><a href="http://127.0.0.1:8000/user/logout" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Logout</a></li>
        </ul>
    </div>


    <div class="content">

        <div class="message-list">
          <!-- Example message -->
          <div class="message-item unread">
            <img src="{{ asset('asset/pablo.png') }}" alt="Profile Picture" class="profile-pic">
            <div class="message-content">
              <strong>Pablo</strong>
              <div>Goodafternoon what time you available sir</div>
            </div>
            <div class="message-time ">12:04 PM</div>
          </div>
          <div class="message-item unread">
            <img src="{{ asset('asset/job.png') }}" alt="Profile Picture" class="profile-pic">
            <div class="message-content">
              <strong>Job</strong>
              <div>hello... ive got a concern about my item</div>
            </div>
            <div class="message-time">8:04 AM</div>
          </div>
          <!-- More messages... -->
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
    </script>
