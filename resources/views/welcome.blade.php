@extends('layouts.layout')

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
                        <button type="submit" class="racetrack-button">Log In</button>
                    </div>
                </form>
            </div>
            <div class="footer">
                <a href="#" style="color:black;">Administrator</a>
                <a href="#"style="color:red;">Forgot Password?</a>
            </div>



            @endsection
