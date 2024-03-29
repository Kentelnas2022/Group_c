@extends('layouts.logout')

@section('content')
<div class="logout-container">
    <h2>Successfully Logged Out!</h2>
    <p>Do you want to log in again?</p>
    <div class="button-container">
        <a href="http://127.0.0.1:8000/" class="button">Login</a>
    </div>
</div>


@endsection
