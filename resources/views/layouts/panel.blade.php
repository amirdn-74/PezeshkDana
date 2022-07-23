<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>پزشک دانا | پنل کاربری</title>
    <link rel="shortcut icon" href="/logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="/styles/app.css" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="/fonts/awesome/css/all.min.css" />
    @yield('styles')
</head>

<body class="panel h-100">
    @include('partials.panel._sideNav')

    @include('partials.panel._topNav')

    <div class="panel-content mt-4">

        @yield('content')

    </div>

    <form action="/logout" method="POST" id="logoutForm">
        @csrf
        @method('DELETE')
    </form>

    @yield('scripts')
    <script>
        var logoutBtn = document.getElementById("logoutBtn"),
            logoutForm = document.getElementById("logoutForm");

        logoutBtn.addEventListener("click", function() {
            logoutForm.submit();
        });
    </script>
    <script src="/scripts/panel.js"></script>
</body>

</html>
