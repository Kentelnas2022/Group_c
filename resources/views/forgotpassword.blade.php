@extends('layouts.forgotpassword')

@section('content')
<div class="login-form">

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Email">
        </div>
            <button type="submit" class="racetrack-button">Reset Password</button>
        </div>
    </form>
</div>
<div class="footer">
    <a href="#" style="color:rgb(236, 230, 230);">Remember Already?</a>&nbsp;
    &nbsp;
    <a href="{{ asset('http://127.0.0.1:8000/#') }}" style="color:rgb(255, 255, 255);">Login</a>&nbsp;
</div>
@endsection
