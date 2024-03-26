@extends('layouts.admin')

@section('content')

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="showSection('users')">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="showSection('adverts')">Adverts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="showSection('messages')">Messages</a>
        </li>
      </ul>
    </div>
</nav>

<!-- Main Content -->
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <!-- Sidebar content goes here -->
            <!-- This sidebar will collapse on smaller devices -->
        </div>

        <!-- Content -->
        <div class="col-md-9">
            <div class="content" id="usersSection">
                <h2>Users Section</h2>
                <p>This is the users section. You can manage users here.</p>

                <!-- Sample Users -->
                <div class="user-list">
                    <div class="user">
                        <h4>User 1</h4>
                        <p>Email: user1@example.com</p>
                    </div>
                    <div class="user">
                        <h4>User 2</h4>
                        <p>Email: user2@example.com</p>
                    </div>
                    <!-- Add more users here -->
                </div>
            </div>
            <div class="content hidden" id="advertsSection">
                <h2>Adverts Section</h2>
                <p>This is the adverts section. You can manage adverts here.</p>
            </div>
            <div class="content hidden" id="messagesSection">
                <h2>Messages Section</h2>
                <p>This is the messages section. You can manage messages here.</p>
            </div>
        </div>
    </div>
</div>

<script>
function showSection(section) {
    var sections = ['users', 'adverts', 'messages'];
    for (var i = 0; i < sections.length; i++) {
        if (sections[i] === section) {
            document.getElementById(section + 'Section').classList.remove('hidden');
        } else {
            document.getElementById(sections[i] + 'Section').classList.add('hidden');
        }
    }
}
</script>

@endsection
