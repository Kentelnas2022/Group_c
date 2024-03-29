@extends('layouts.adminlogin')

@section('content')

<header>
    <h1>Administrator</h1>
</header>
<div class="container">
    <form action="#" method="post">
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>
        </div>
        <div class="checkbox-container">
            <input type="checkbox" id="policy" name="policy" required>
            <label class="checkbox-label" for="policy">I accept the policy and terms</label>
        </div>
        <button type="submit">Log In</button>
    </form>
    <p class="forgot-password">Forgot Password?</p>
</div>

@endsection
