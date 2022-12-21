@extends('layout.root')
@section('home')
    <main class="w-100 bg-primary text-white">
        <section class="container d-flex flex-wrap justify-content-around mx-auto">
            <div class="container p-2 mx-2">
                <h2 class="w-75">Stock Trading with Zero Commission*</h2>
                <p>Trade shares from around the globe and US including Meta, Amazon and Microsoft with extended hours* and no commission*.</p>
                <ul>
                    <li>Access 5,500+ global stocks and other markets including cryptos, FX and commodities</li>
                    <li>Award-winning platforms including MT4 & 5</li>
                    <li>XAU/USD spreads from $0.04 with DMA account</li>
                </ul>
                <button class="btn btn-warning text-white">OPEN AN ACCOUNT</button>
                <button class="btn btn-success my-2">TEST DEMO</button>
                <p style="font-size: 0.75rem" class="my-2 w-50">*Bid and Ask spread cost still applies. Runs through 31st December 2022. Extended hours are only available for major US stocks.</p>
            </div>
            <div class="container w-75 p-2 mx-2 text-dark"> 
                <div class="row p-2">
                    <div class="col-sm p-4 mx-2 bg-secondary">
                        <img class="icon mx-3" src="https://www.svgrepo.com/show/31066/gold.svg" alt="gold">
                        <h2 class="p-2">Precious Metals</h2>
                        <p class="p-2">Gold Price : <span class="h1 p-4 text-success gold--price">$$</span></p>
                    </div>
                    <div class="col-sm p-4 mx-2 bg-secondary">
                        <img class="icon mx-3" src="https://www.svgrepo.com/show/10035/dollar.svg" alt="dollar">
                        <h2 class="p-2">Exchange</h2>
                        <p class="p-2">Dollar Price : <span class="h1 p-4 text-success">$$</span></p>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-sm p-4 mx-2 bg-secondary">
                        <img class="icon mx-3" src="https://www.svgrepo.com/show/354819/bitcoin.svg" alt="bitcoin">
                        <h2 class="p-2">Cryptocurrencies</h2>
                        <p class="p-2">Bitcoin Price : <span class="h1 p-4 text-success">$$</span></p>
                    </div>
                    <div class="col-sm p-4 mx-2 bg-secondary">
                        <img class="icon mx-3" src="https://www.svgrepo.com/show/28703/graph.svg" alt="dollar">
                        <h2 class="p-2">Stock Market</h2>
                        <p class="p-2">Actions Price : <span class="h1 p-4 text-success">$$</span></p>
                    </div>
                </div>
            </div>
            <div class="container w-75 d-flex overflow-hidden bg-warning">
                <button>
                    <
                </button>
                <div class="w-100">
                    xd
                </div>
                <div class="w-100">
                    xd
                </div>
                <div class="w-100">
                    xd
                </div>
                <button>
                    >
                </button>
            </div>
        </section>
    </main>
    <script src="{{asset("js/home.js")}}"></script>
@endsection