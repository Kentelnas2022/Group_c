@extends('layouts.admindashboard')

@section('content')

<div class="main-container d-flex">
    <!-- Sidebar -->
    <div class="sidebar" id="side_nav">
        <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-center">
            <h1 class="fs-4">
                <img src="{{ asset('asset/Ellipse 63.png') }}" alt="Lost & Found Logo" width="80" height="80" class="me-2">
                <p>Lost and Found</p>
            </h1>

            <!-- Menu Button -->
            <button class="btn d-md-none d-block close-btn px-1 py-0 text-white" id="menuButton">
                <img src="{{ asset('asset/menu.png') }}" alt="Menu" width="24" height="24">
            </button>
        </div>

        <ul class="list-unstyled px-2">
            <li class="active"><a href="http://127.0.0.1:8000/admin/admindashboard" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-home"></i> Dashboard</a></li>
            <li><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-list"></i> Profile</a></li>
            <li>
                <a href="http://127.0.0.1:8000/message/? " class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fal fa-comment"></i> Messages</span>
                    <span class="bg-dark rounded-pill text-white py-0 px-2">02</span>
                </a>
            </li>


            <ul class="list-unstyled px-2">
                <li><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bars"></i> Logout</a></li>

                <li><a href="#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Notifications</a></li>
            </ul>
        </ul>
    </div>

    <!-- Content -->
    <div class="content">
        <nav class="navbar navbar-expand-md navbar-light bg-maroon">
            <div class="container-fluid">
                <a class="navbar-brand fs-4" href="#"><span class="bg-gradient-danger rounded px-2 py-0 text-white">Welcome to Dashboard</span></a>
            </div>
        </nav>


        <div class="col-md-4x">
            <div class="profile">
                <img src="{{ asset('asset/admin.png') }}" alt="admin" width="60" height="60">
                <div>
                    <p>Hello, Admin</p>
                    <a href="{{ asset('profile') }}" class="btn btn-light">Profile</a>
                </div>
            </div>
            <div class="button" id="advertButton">
                <img src="{{ asset('asset/megaphone.png') }}"  width="40" height="40">
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
            <div class="button" id="lostFoundButton">
                <img src="{{ asset('asset/user.gif') }}" width="40" height="40">
                <div>
                    <p><strong>Users</strong></p>
                    <p style="padding-right: 20px;">
                        <a href="{{ asset('lostitem') }}" style="color: maroon;">Active users</a>
                    </p>
                </div>
        </div>
    </div>
</div>

@endsection
