<section class="w-100 text-white">
    <div class="w-100 bg-primary d-flex flex-wrap justify-content-around mx-auto">
    <div class="container p-2 mx-2 my-4">
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
    <div class="container w-75 p-2 mx-2 text-dark my-5"> 
        <div class="row p-2">
            <div class="col-sm p-4 mx-2" style="background-color:rgb(231, 231, 231);">
                <img class="icon mx-3" src="https://www.svgrepo.com/show/31066/gold.svg" alt="gold">
                <h2 class="p-2">Precious Metals</h2>
                <p class="p-2">Gold Price : <span class="h1 p-4 text-success gold--price">$$</span></p>
            </div>
            <div class="col-sm p-4 mx-2" style="background-color:rgb(231, 231, 231);">
                <img class="icon mx-3" src="https://www.svgrepo.com/show/10035/dollar.svg" alt="dollar">
                <h2 class="p-2">Exchange</h2>
                <p class="p-2">Dollar Price : <span class="h1 p-4 text-success dollar--price">$$</span></p>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-sm p-4 mx-2" style="background-color:rgb(231, 231, 231);">
                <img class="icon mx-3" src="https://www.svgrepo.com/show/354819/bitcoin.svg" alt="bitcoin">
                <h2 class="p-2">Cryptocurrencies</h2>
                <p class="p-2">Bitcoin Price : <span class="h1 p-4 text-success">$$</span></p>
            </div>
            <div class="col-sm p-4 mx-2" style="background-color:rgb(231, 231, 231);">
                <img class="icon mx-3" src="https://www.svgrepo.com/show/28703/graph.svg" alt="dollar">
                <h2 class="p-2">Stock Market</h2>
                <p class="p-2">Actions Price : <span class="h1 p-4 text-success">$$</span></p>
            </div>
        </div>
    </div>
</div>
    <h1 class="text-center m-4 text-primary">Currency Power</h1>
    <div class="w-75 mx-auto my-3 d-flex justify-content-center text-dark slide__container">
        <button class="next--plus h2 border-0 text-primary">></button>
            <div class="overflow-hidden w-100 d-flex justify-content-center">
                <div class="slide d-flex p-1">
                    @foreach ($power as $value)
                    <div class="mx-5 btn @if ($value[1] === 'text-success') btn-outline-success @else btn-outline-danger @endif">
                        <h6 class="text-center">{{$value[2]}}</h6>
                        <p>power: {{$value[0]}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        <button class="next--minus h2 border-0 text-primary"><</button>
    </div>
</section>