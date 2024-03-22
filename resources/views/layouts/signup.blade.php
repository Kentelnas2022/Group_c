<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="your-classname"> <!-- Remember to replace 'your-classname' with the actual class name -->
            <img src="https://i.ibb.co/v1CcQcm/Group-96.png" alt="Group" width="38px" style="margin-right:220px;">
        </div>
        <section>
            <center>
                <img src="https://i.ibb.co/FHXyHY2/423766365-376283168620667-7958441195301408860-n.png" alt="Header" width="200" height="200">
            </center>
        </section>
    </header>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>
