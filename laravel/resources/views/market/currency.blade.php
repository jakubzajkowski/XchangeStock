@extends('layout.root')
@section('eur-gbp')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="{{asset("js/graphs.js")}}" type="module"></script>
<link href="{{asset('css/marketPages.css')}}" rel="stylesheet">
    <main class="w-100 text-dark">
        <section class="w-100 mx-auto">
            <div class="container w-75 p-2 mx-2 mx-auto">
                <div class="row p-2 my-5 align-items-center">
                    <div class="col-sm">
                        <h1 class="text-left display-4 text-uppercase">{{$power[2]}}</h1>
                        <h4>{{$power[8]}}</h4>
                        <p class="text-left w-75">For over a decade, FOREX.com has been serving the needs of currency traders worldwide. We understand what traders need and offer sophisticated trading tools, competitive spreads and exceptional execution quality on over 80 currency pairs.</p>
                    </div>
                    <div class="col-sm text-end">
                        <div class="row text-center">
                            <div class="col-sm border border-5">
                                <h3 class="display-2">{{$power[0]}}00</h3>
                                <p class="text-end">BUY</p>
                            </div>
                            <div class="col-sm border border-5">
                                <h3 class="display-2">{{$power[1]}}00</h3>
                                <p class="text-end">SELL</p>
                            </div>
                            <table class="mt-5 p-1">
                                <tr class="text-start">
                                    <td>HIGH</td>
                                    <td>LOW</td>
                                    <td>CHANGE</td>
                                    <td>CHANGE%</td>
                                </tr>
                                <tr class="text-start table__numbers">
                                    <td>{{$power[4]}}</td>
                                    <td>{{$power[5]}}</td>
                                    <td>{{$power[6]}}%</td>
                                    <td>{{$power[7]}}%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-100 text-dark bg-primary">
            <div class="container w-75 p-2 mx-2 text-white mx-auto">
                <div class="row p-2 align-items-center">
                    <div class="col-sm">
                        <h3 class="text-left">TRADE MARKET OPPORTUNITIES 24 HOURS</h3>
                    </div>
                    <div class="col-sm text-end">
                        <button class="mx-2 border p-2 rounded text-primary bg-light btn"><a href="/register" class="text-dark text-decoration-none">OPEN AN ACCOUNT</a></button>
                    </div>
                </div>
            </div>
        </section>
        @include('market.news',['news'=>$news])
        <section class="w-100 text-dark">
            <div class="container w-75 p-2 mx-2 text-dark mx-auto">
                <h4>EUR/GBP</h4>
                <div>
                    <p class="mx-1 btn btn-primary d7">7d</p>
                    <p class="mx-1 btn btn-primary d14">14d</p>
                    @if (Auth::guest())
                        
                    @else
                        <form class="form-horizontal p-2 d-inline" action="http://127.0.0.1:8000/account/{{Auth::id()}}" method="POST">
                            @csrf
                            <input type="hidden" name="graph" value="{{$power[2]}}">
                            <button class="mb-3 btn btn-primary">Add Graph</button>
                        </form>
                    @endif
                </div>
                <canvas id="myChart" style="width:100%;height:500px"></canvas>
            </div>
        </section>
        <section class="w-100 text-dark mt-5">
            <div class="container w-75 p-2 mx-2 text-dark mx-auto">
                <h5>INTERESTING FACTS</h5>
                <p class="w-75">EUR/USD is one of the most traded currency pairs in the world. It represents the value of the US dollar per one euro. The euro is a relativity new currency when compared with the other majors, it was established by the provisions in the 1992 Maastricht Treaty and is managed by the European Central Bank (ECB) and the Eurosystem (comprised of the central banks of the eurozone). Member nations of the euro are all part of the EU but not all EU nations are part of the euro (e.g. Denmark).</p>
                <h5>PRICE DRIVERS</h5>
                <p class="w-75">A general rule is that the larger the GDP of a country in the Eurozone, the larger their impact on the euro. In this regard, economic data and policy decisions in Germany (which has the highest GDP in the Eurozone as of 2018) can have a significant impact on EUR. Shakeups within the Eurozone, such as the United Kingdom’s Brexit, can of course cause euro volatility as well. However, smaller countries also can affect the euro, especially in times of crisis that threaten the economic stability of the region and possibility cause s domino effect. Other data including GDP growth, employment, inflation and trade balance data are important. The ECB dictates interest rates for the region and can cause the euro to move significantly through other policy decisions it makes.

                    USD can be influenced by labor market data – in particular non-farm payroll (NFP) results and the level of unemployment – US GDP and inflation data, interest rates and the Fed.</p>
                    <button class="mx-2 my-4 border p-2 rounded text-primary bg-success btn"><a href="/register" class="text-light text-decoration-none">OPEN AN ACCOUNT</a></button>
                </div>
        </section>
        @include('home.section8')
    </main>
    <script type="module">
        import Graphs from '../js/graphs.js'
        let graph = new Graphs();
        graph.fetchData();
        graph.ButtonsAction();
    </script>
@endsection