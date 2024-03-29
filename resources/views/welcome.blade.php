@extends('layouts.layout')

@section('content')
<div class="login-form">

                <form id="loginForm">
                   <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email" >
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" >
                    </div>
                    <div class="input-group">
                        <button type="submit" href='{{ asset('http://127.0.0.1:8000/dashboard')}}'class="racetrack-button">Login</button>
                    </div>
                </form>
            </div>
            <div class="footer">
                <a href="{{ asset('http://127.0.0.1:8000/signup') }}"style="color:rgb(236, 230, 230);">Sign Up</a>&nbsp;
                &nbsp;
                <a href="{{ asset('http://127.0.0.1:8000/forgotpassword/') }}" style="color:rgb(255, 254, 254);">Forgot Password?</a>&nbsp;
            </div>




            @endsection
