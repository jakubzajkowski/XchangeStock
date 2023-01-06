@extends('layout.root')
@section('market')
    <main class="w-100 text-dark">
        <section class="w-100 mx-auto">
            <div class="bg-primary w-100 p-5">
                <div class="w-75 mx-auto bg-white p-1">
                    <h1 class="p-2">Range of Trading Markets</h1>
                </div>
            </div>
                <div class="container w-75 p-2 mx-2 mx-auto">
                    <div class="row p-2 my-5 align-items-center">
                        <div class="col-sm">
                            <h4 class="text-left">Access 5,500+ trading products with competitive pricing and quality execution.</h4>
                            <ul>
                                <li>Trade 80+ currency pairs, thousands of stocks, popular commodities, indices and cryptocurrencies</li>
                                <li>Access top companies like Meta, Amazon and Microsoft with commissions from 1.8 cents on US stocks</li>
                                <li>Earn cash rebates when you qualify for the Active Trader program</li>
                                <li>Speculate on Bitcoin volatility with fixed spreads and low margin</li>
                            </ul>
                            <button class="btn bg-warning p-1 mx-1 my-1">OPEN AN ACCOUNT</button>
                        </div>
                        <div class="col-sm">
                            <img class="p-2" src="https://www.forex.com/~/media/forex/images/services/markets/all-hero-3.svg" alt="">
                        </div>
                    </div>
                </div>
        </section>
        <section class="w-100 text-dark">
            <div class="container w-75 p-2 mx-2 text-dark mx-auto">
                <h2 class="text-center">Tight spreads backed by lightning fast execution</h2>
                <nav class="navbar p-2">
                      <ul class="navbar nav">
                        <li class="active"><a href="#" class="text-decoration-under text-dark mx-4 h5 p-3 my-3">All</a></li>
                        <li><a href="#" class="text-decoration-none text-dark mx-4 p-3 my-3">Cryptos</a></li>
                        <li><a href="#" class="text-decoration-none text-dark mx-4 p-3 my-3">Forex</a></li>
                        <li><a href="#" class="text-decoration-none text-dark mx-4 p-3 my-3">Indices</a></li>
                      </ul>
                      <input placeholder="Search The Instrument" type="text" class="px-2 p-1">
                  </nav>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Sell</th>
                        <th>Buy</th>
                        <th>Change</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($power as $value)
                      <tr>
                         <td>{{$value[4]}}</td>
                         <td>{{$value[0]}}</td>
                         <td>{{$value[1]}}</td>
                         <td>{{$value[5]}}%</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </section>
    </main>
@endsection