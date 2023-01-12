<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Xchangestock</title>
        <link href="{{asset('css/home.css')}}" rel="stylesheet">
        <link href="{{asset('css/register.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/Draggable.min.js" integrity="sha512-cGS9y5MepPe9pI2nibL3W1n4ImVcgcvipKjl0IXmgMgXlrwIX0bc2lm4QgMRtEnyN+k/ct0a5iCaqo9cXYgNGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset("js/mobile.js")}}" defer></script>
    </head>
    <body>
        <header class="w-100 desktop fixed-top">
            <div class="bg-white">
                <nav class="navbar navbar-inverse navbar-fixed-top w-75 mx-auto d-flex">
                    <h3><a href="/" class="text-dark text-decoration-none"><span class="text-success">X</span>changeStock<span class="h6">.com</span></a></h3>
                    <ul class="nav align-items-center p-1">
                        <button class="mx-2 border p-1 rounded bg-warning btn"><a href="/register" class="text-dark text-decoration-none">OPEN AN ACCOUNT</a></button>
                        <li class="mx-2 btn"><a href="/login" class="text-dark text-decoration-none">LOGIN</a></li>
                        <li class="mx-2 btn">Contact us</li>
                        <input class="mx-2" type="text" placeholder="Search XchangeStock">
                    </ul>
                </nav>
            </div>
            <div class="bg-secondary">
                <nav class="navbar navbar-inverse w-75 mx-auto d-flex"> 
                    <ul class="nav w-75">
                        @if (Auth::guest())
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/market" class="text-white text-decoration-none">MARKET</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/services" class="text-white text-decoration-none">SERVICES</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/education" class="text-white text-decoration-none">EDUCATION</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/aboutUs" class="text-white text-decoration-none">ABOUT US</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/support" class="text-white text-decoration-none">SUPPORT</a></li>
                        @else
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/market" class="text-white text-decoration-none">MARKET</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/services" class="text-white text-decoration-none">SERVICES</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/education" class="text-white text-decoration-none">EDUCATION</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/aboutUs" class="text-white text-decoration-none">ABOUT US</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/support" class="text-white text-decoration-none">SUPPORT</a></li>
                            <li class="mx-2 btn btn-outline-success text-white border border-secondary"><a href="/account/{{Auth::user()->id}}" class="text-white text-decoration-none">ACCOUNT</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
        <header class="mobile">
            <p><svg class="bars mx-2 mt-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg><p>
            <h3><a href="/" class="text-dark text-decoration-none"><span class="text-success">X</span>changeStock<span class="h6">.com</span></a></h3>
        </header>
        <div class="bg-secondary mobile__nav p-2">
            <nav class="navbar navbar-inverse w-75 mx-auto d-flex justify-content-center"> 
                <ul class="nav w-50">
                    @if (Auth::guest())
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/market" class="text-white text-decoration-none">MARKET</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/services" class="text-white text-decoration-none">SERVICES</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/education" class="text-white text-decoration-none">EDUCATION</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/aboutUs" class="text-white text-decoration-none">ABOUT US</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/support" class="text-white text-decoration-none">SUPPORT</a></li>
                    @else
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/market" class="text-white text-decoration-none">MARKET</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/services" class="text-white text-decoration-none">SERVICES</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/education" class="text-white text-decoration-none">EDUCATION</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/aboutUs" class="text-white text-decoration-none">ABOUT US</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/support" class="text-white text-decoration-none">SUPPORT</a></li>
                        <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/account/{{Auth::user()->id}}" class="text-white text-decoration-none">ACCOUNT</a></li>
                    @endif
                </ul>
            </nav>
        </div>
        @yield('home')
        @yield('aboutus')
        @yield('education')
        @yield('market')
        @yield('services')
        @yield('support')
        @yield('register')
        @yield('register2')
        @yield('register3')
        @yield('register4')
        @yield('login')
        @yield('userdashboard')
        <footer class="w-100">
            <div class="container w-75 p-5 mx-2 text-dark mx-auto">
                <hr>
                <div class="row mt-1 align-items-center">
                    <div class="col-sm">
                        <h5>Tell me more about the</h5>
                        <p class="w-75">Costs associated with trading forex
                            Forex markets I can trade
                            FOREX.com trading platform
                            Minimum margin requirements
                        </p>
                    </div>
                    <div class="col-sm">
                        <h5>I would like to</h5>
                        <p class="w-75">Fund my account
                            Request a withdrawal
                            Download FOREX.com Desktop
                            Download MetaTrader
                        </p>
                    </div>
                    <div class="col-sm">
                        <h5>I would like to learn about</h5>
                        <p class="w-75">Trading the forex markets
                            Managing risk when trading
                            Trading in volatile markets
                            Using technical analysis
                        </p>
                    </div>
                </div>
            </div>
            <div class="container w-75 p-5 mx-2 text-dark mx-auto">
                <hr>
                <div class="row mt-1 align-items-center">
                    <p class="col-sm"><a href="" class="text-decoration-none text-dark">Partnerships</a></p>
                    <p class="col-sm"><a href="" class="text-decoration-none text-dark">Forex</a></h3>
                    <p class="col-sm"><a href="" class="text-decoration-none text-dark">Affiliate Program</a></p>
                    <p class="col-sm"><a href="" class="text-decoration-none text-dark">Investor Relations</a></p>
                    <p class="col-sm"><a href="" class="text-decoration-none text-dark">Press Releases</a></p>
                    <p class="col-sm"><a href="" class="text-decoration-none text-dark">International</a></p>
                </div>
            </div>
        </footer>
    </body>
</html>
