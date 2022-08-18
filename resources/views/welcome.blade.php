<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Coming Soon - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Background Video-->
        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="{{asset('frontend/assets/mp4/bg.mp4')}}" type="video/mp4" /></video>
        <!-- Masthead-->
        <div class="masthead"> 
                       
            <div class="masthead-content text-white">
                
                <div class="container-fluid px-4 px-lg-0">
   
                <div>
                <img src="{{asset('images/logo.png')}}" alt="asm-karma" width="70%" style="margin-left:15%;">
            </div>
            <div style="">
            <h5 style="text-align:center; padding:20px 0px; color:white;">YOUR PERSONAL TRACKER AND COMPASS</h5>
            <p style="text-align:center; padding:0px 0px 10px 0px; color:white;">FROM</p>
            </div>
            <div>
                <img src="{{asset('images/anant-logo.jpg')}}" alt="asm-karma" width="40%" style="margin-left:30%; filter: invert(1);">
            </div>
           <br>

           <div class="d-flex justify-content-center">          
           @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-primary">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-secondary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>

                </div>
            </div>
        </div>
        <!-- Social Icons-->
        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark m-3" href="#!"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('frontend/js/scripts.js')}}"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
