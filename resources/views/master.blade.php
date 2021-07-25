<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="HTML, CSS, JS, Laravel">
    <meta name="author" content="LordPhoenix">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Thai font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset("favicon.ico")}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset("assets/css/styles-act.css")}}" rel="stylesheet" />
    
    <title>Activities RMUTT Freetime</title>
</head>
<body>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <div>
                <a class="navbar-brand" href="/">Activity Day</a>
            </div>
        </div>
    </nav>

    @yield('header')

    @yield('content')

<footer class="py-5 bg-dark" style="
                                    left: 0;
                                    bottom: 0;
                                    width: 100%;
                                    text-align: center;">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></scrip>
<!-- Core theme JS-->
<script src="{{asset('assets/js/scripts.js')}}"></script>

</body>
</html>
