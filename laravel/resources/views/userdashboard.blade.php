@extends('layout.root')
@section('userdashboard')
<script type="module" src="{{asset("js/userGraph.js")}}" defer></script>
<link href="{{asset('css/userGraph.css')}}" rel="stylesheet">
<main class="w-100 text-dark">
    <section class="w-100 mx-auto bg-primary">
        <div class="w-75 mx-auto p-5 d-flex justify-content-between align-items-center"">
            <div>
                <h2 class="text-light">Welcome Again {{Auth::user()->firstname}}</h2>
            </div>
            <div class="w-50 align-items-center text-end">
                <p class="w-25 btn btn-outline-light my-1">+ ADD FUNDS</p>
                <svg class="mx-1 btn p-3 rounded border"style="width:8%;fill:white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v54.1l-85.6 85.6c6.7 4.2 13 9.3 18.8 15.1s10.9 12.2 15.1 18.8L353.9 192H408c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7zM121.4 281.4l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                <svg class="mx-1 btn p-3 rounded border"style="width:8%;fill:white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v18.8c0 47-17.3 92.4-48.5 127.6l-7.4 8.3c-8.4 9.4-10.4 22.9-5.3 34.4S19.4 416 32 416H416c12.6 0 24-7.4 29.2-18.9s3.1-25-5.3-34.4l-7.4-8.3C401.3 319.2 384 273.9 384 226.8V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm45.3 493.3c12-12 18.7-28.3 18.7-45.3H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7z"/></svg>
                <svg class="mx-1 btn p-3 rounded border" style="width:8%;fill:white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                <a href="/logout"><svg class="mx-1 btn p-3 rounded border" style="width:8%;fill:white;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg></a>
            </div>
        </div>
    </section>
    <section class="w-100 mx-auto">
        <div class="container w-75 p-2 mx-2 text-dark mx-auto">
            <div class="row p-2 my-5">
                <h1>Web Trading</h1>
                <div class="col-sm p-4 mx-2">
                    <h5>Simplicity, speed, and reliability deliver a superior trading experience accessible from all browsers and operating systems.</h5>
                    <p>Web trading's intuitive design and rich features give you superior control of your trading strategies.</p>
                    <ul>
                        <li>Smart trade ticket with advanced risk management options</li>
                        <li>Pre-defined and customizable layouts</li>
                        <li>Powerful charts with integrated one-click dealing</li>
                    </ul>
                    <p class="btn btn-success"><a href="/market" class="text-light text-decoration-none">See Market</a></p>
                    <p>add, <a href="" class="text-dark">or check your graphs</a></p>
                </div>
                <div class="col-sm p-4 mx-2">
                    <img style="width: 100%;" src="https://www.forex.com/~/media/forex/images/new-g2-us-images/mercury-hero3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 mx-auto">
        <div class="container w-75 p-2 mx-2 text-dark mx-auto">
            <div class="row p-2 my-5">
                <div class="col-sm p-4 mx-2 add__container position-relative">
                   <h1 class="text-center display-1 add--graph">+Add Graph</h1>
                </div>
                <div class="col-sm p-4 mx-2 add__container position-relative">
                    <h1 class="text-center display-1 add--graph">+Add Graph</h1>
                </div>
            </div>
            <div class="row p-2 my-5">
                <div class="col-sm p-4 mx-2 add__container position-relative">
                    <h1 class="text-center display-1 add--graph">+Add Graph</h1>
                 </div>
                 <div class="col-sm p-4 mx-2 add__container position-relative">
                    <h1 class="text-center display-1 add--graph">+Add Graph</h1>
                 </div>
            </div>
        </div>
    </section>
    @include('home/section8')
</main>
@endsection