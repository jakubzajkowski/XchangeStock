@extends('layout.root')
@section('services')
<main class="w-100 text-dark">
    <section class="w-100 mx-auto bg-primary">
        <div class="bg-primary w-100 p-5">
            <div class="w-75 mx-auto bg-white p-1">
                <h1 class="p-2">Services</h1>
            </div>
        </div>
    </section>
    <section class="w-100 text-dark">
        <div class="container w-50 p-2 mx-2 my-4 text-dark mx-auto">
            <p>We are committed to execution quality and transparency. In January 2011, we were the first broker to introduce an Execution Scorecard and today remain the only US broker to disclose our execution quality.</p>
        </div>
    </section>
    <section class="w-100 text-dark " style="background-color: rgb(231, 231, 231)">
        <div class="container w-75 p-2 mx-2 my-3 text-dark mx-auto">
            <div class="my-4 text-center">
                <h2>Exceptional Trade Executions</h2>
                <p>Fast trade execution is critical to your success and we challenge ourselves every day to deliver the best experience.</p>
            </div>
            <div class="row p-2 my-5">
                <div class="col-sm p-4 mx-2 text-center">
                    <h6>% OF TRADES EXECUTED IN LESS THAN 1 SECOND</h6>
                    <div>
                        <h1 class="d-inline" style="color:greenyellow">99.61%</h1>
                        <p class="d-inline p-3">Includes all valid trade and orders requests, excluding those entered on the MT4 platform**</p>
                    </div>
                </div>
                <div class="col-sm p-4 mx-2 text-center">
                    <h6>AVERAGE EXECUTION SPEED</h6>
                    <div>
                        <h1 class="d-inline" style="color:greenyellow">0.06secs</h1>
                        <p class="d-inline p-3">Elapsed time between market order receipt and execution</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 text-dark">
        <div class="container w-75 p-2 mx-2 my-3 text-dark mx-auto">
            <div class="my-4 text-center">
                <h2>Improve your potential</h2>
                <p>We’ve automated every aspect of the trade process with the goal of ensuring your trades are executed lightning fast, without any manual intervention, and at the price you expect – or better.</p>
            </div>
            <div class="row p-2 my-5">
                <div class="col-sm p-4 mx-2 text-center">
                    <h6>% OF LIMIT ORDERS PRICE IMPROVED</h6>
                    <div>
                        <h1 style="color:greenyellow">66.85%</h1>
                        <p>Limit orders executed at a price better than the requested price</p>
                    </div>
                </div>
                <div class="col-sm p-4 mx-2 text-center">
                    <h6>% OF LIMIT ORDERS FILLED "AT OR BETTER"</h6>
                    <div>
                        <h1 style="color:greenyellow">100%</h1>
                        <p>Limit orders executed at the requested rate or better</p>
                    </div>
                </div>
                <div class="col-sm p-4 mx-2 text-center">
                    <h6>AV. INCREASE PER FX LIMIT ORDER</h6>
                    <div>
                        <h1 style="color:greenyellow">0.67pips</h1>
                        <p>Pip difference between requested and executed price of price improved limit orders in FX markets</p>
                    </div>
                </div>
                <div class="col-sm p-4 mx-2 text-center">
                    <h6>AV. INCREASE PER NON-FX LIMIT ORDER</h6>
                    <div>
                        <h1 style="color:greenyellow">0.11%</h1>
                        <p>Percent difference between requested and executed price of price improved limit orders in non-FX markets</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 text-dark " style="background-color: rgb(231, 231, 231)">
        <div class="container w-75 p-2 mx-2 my-3 text-dark mx-auto">
            <div class="my-4 text-center">
                <h2>Get Filled, Fast</h2>
                <p>Speed, price and access to liquidity – we’ve got you covered</p>
                <h6>% OF TRADES SUCCESSFULLY EXECUTED</h6>
                <h1 style="color:greenyellow">100%</h1>
                <p>Includes all valid trade and orders received by the system, excluding those entered on the MT4 platform**</p>
            </div>
        </div>
    </section>
    <section class="w-100 text-dark">
        <div class="container w-75 p-2 mx-2 my-4 text-dark mx-auto">
            <p>FOREX.com's execution statistics refer to FX executions for the FOREX.com group. Please note that multiple factors may impact execution speed, including but not limited; market conditions, platform type, network connectivity, trading strategies, and account type. FOREX.com's execution statistics represent orders executed on FOREX.com's platforms during market hours between November 30, 2022, 5:00 pm ET, and December 31, 2022, 5:00 pm ET for all FOREX.com's international affiliates and exclude trades/orders entered on the MetaTrader platform.

                Market volatility, volume, and system availability may delay trade executions. Price can change quickly in fast market conditions, resulting in an execution price different from the price available at the time order is submitted. Price improvement is not guaranteed and will not occur in all situations.
                
                **Excludes trades that received non-standard order processing and orders that failed to trigger</p>
        </div>
    </section>
    @include('home/section8')
</main>
@endsection