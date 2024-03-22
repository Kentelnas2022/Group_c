@extends('layouts.message')

@section('content')
<div class="container mt-3">
    <div class="header">
      <span></span>
      <strong style="font-size: 30px;">MESSAGE</strong>

      <span></span>
    </div>
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
      <!-- More messages... -->
    </div>
  </div>

@endsection
