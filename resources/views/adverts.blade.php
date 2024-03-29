@extends('layouts.adverts')

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
            <li>
                <a href="http://127.0.0.1:8000/message/? " class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                    <span><i class="fal fa-comment"></i> Messages</span>

                </a>
            </li>
            <li class="active"><a href="http://127.0.0.1:8000/user/adverts#" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i> Create an Advert</a></li>
            <li><a href="http://127.0.0.1:8000/lostitem/" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-envelope-open-text"></i>Lost and Found Items</a></li>&nbsp;&nbsp;
            <li class="logout-link"><a href="http://127.0.0.1:8000/user/logout" class="text-decoration-none px-3 py-2 d-block"><i class="fal fa-bell"></i> Logout</a></li>
</ul>
    </div>

    <!-- Content -->
    <div class="content">


        <div class="container">
            <section class="form-container">
                <h2>Add a New Entry</h2>
                <form>
                    <div class="mb-3">
                        <label for="found-lost" class="form-label">Found/Lost:</label>
                        <select id="found-lost" name="found_lost" class="form-select">
                            <option value="found">Found</option>
                            <option value="lost">Lost</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="item-name" class="form-label">Item Name:</label>
                        <input type="text" id="item-name" name="item-name" class="form-control" placeholder="Enter item name" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Enter item description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="contact-number" class="form-label">Contact Number:</label>
                        <input type="tel" id="contact-number" name="contact_number" class="form-control" placeholder="Enter contact number" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Location:</label>
                        <input type="text" id="location" name="location" class="form-control" placeholder="Enter location" required>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo:</label>
                        <input type="file" id="photo" name="photo" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
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

