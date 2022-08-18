<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
     <!-- Styles -->
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body style="background:#090909c7;">
<div class="container-fluid p-0 m-0">
    <div class="row">
        <div class="col-md-4 p-0">
            
            <div class="card h-100 d-flex border-0 rounded-0"> 
                <div class="card-body" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
                <div class="text-center">
                <h4>USER ORGANIZATION</h4>
                <br>
                <span class="px-1" style="border:2px solid grey">
                    INIT
                </span> 
                </div> 
                <div class="text-center mt-5">
                <h4>Anant Management Service</h4>
                <img src="{{asset('images/anant-logo.jpg')}}" alt="asm-karma" width="20%" style="margin-left:40%; margin-top:20px;">
                </div> 
                </div>
            </div>
           
        </div>
        <div class="col-md-8 p-0">
        {{ $slot }}
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>