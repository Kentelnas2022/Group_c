@extends('layouts.signup')

@section('content')
<div class="login-form">
<form id="loginForm">
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter Username" required>
    </div>
   <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter Email" required>
    </div>
    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter Password" required>
    </div>
    <div class="input-group">
        <button type="submit" class="racetrack-button">Sign Up</button>
    </div>
</form>
</div>
<div class="footer">
    <a href="{{ asset('http://127.0.0.1:8000/') }}"style="color:rgb(236, 230, 230);">Login</a>&nbsp;
&nbsp;
<a href="#"style="color:red;">Forgot Password?</a>&nbsp;
</div>

 @endsection
