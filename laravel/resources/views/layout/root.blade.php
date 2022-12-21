<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Xchangestock</title>
        <link href="{{asset('css/home.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <header class="w-100">
            <div>
                <nav class="navbar navbar-inverse w-75 mx-auto d-flex">
                    <h3><span class="text-success">X</span>changeStock<span class="h6">.com</span></h3>
                    <ul class="nav align-items-center p-1">
                        <button class="mx-2 border p-1 rounded bg-warning btn">OPEN AN ACCOUNT</button>
                        <li class="mx-2 btn">LOGIN</li>
                        <li class="mx-2 btn">Contact us</li>
                        <input class="mx-2" type="text" placeholder="Search XchangeStock">
                    </ul>
                </nav>
            </div>
            <div class="bg-secondary">
                <nav class="navbar navbar-inverse w-75 mx-auto d-flex"> 
                    <ul class="nav w-75">
                        <li class="mx-2 btn btn-outline-success text-white border border-secondary">MARKET</li>
                        <li class="mx-2 btn btn-outline-success text-white border border-secondary">SERVICES</li>
                        <li class="mx-2 btn btn-outline-success text-white border border-secondary">EDUCATION</li>
                        <li class="mx-2 btn btn-outline-success text-white border border-secondary">ABOUT US</li>
                        <li class="mx-2 btn btn-outline-success text-white border border-secondary">SUPPORT</li>
                    </ul>
                </nav>
            </div>
        </header>
        @yield('home')
    </body>
</html>
