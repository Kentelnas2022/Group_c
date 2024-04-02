<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="wrapper">
        <div class="container">
          <div class="col-left">
            <div class="login-text">
              <h2>Welcome Back</h2>
            </div>
          </div>
          <div class="col-right">

                <form id="loginForm" href="{{ asset('http://127.0.0.1:8000/dashboard') }}">
                    <div class="login-form">
                        <h2>Login</h2>
                        <p>
                            <label>Username or email address<span>*</span></label>
                            <input id="username" type="text" placeholder="Username or Email" required>
                        </p>
                        <p>
                            <label>Password<span>*</span></label>
                            <input id="password" type="password" placeholder="Password" required>
                        </p>
                        <p>
                            <input type="submit" value="Sign In" />
                        </p>
                    </div>
                </form>

            </div>
          </div>
        </div>
        <div class="credit">
        </div>
      </div>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <!-- Include SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>

<script>
document.getElementById("loginForm").addEventListener("submit", function(event){
    event.preventDefault(); // Prevent form submission
    // Your logic to validate and submit the form
    // For demonstration, let's show a SweetAlert
    Swal.fire({
        icon: 'success',
        title: 'Signed in successfully!',
        showConfirmButton: false,
        timer: 1500
    });
});
</script>

</body>
</html>
