<nav class="navbar navbar-inverse w-75 mx-auto d-flex justify-content-center"> 
    <ul class="nav w-50">
        @if (Auth::guest())
            <div class="dropdown">
                <li class="mx-2 btn dropdown-toggle btn-outline-success text-white border border-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="/market" class="text-white text-decoration-none">MARKET</a></li>
                <div class="dropdown-menu" style="width: 200%;left:-50%" aria-labelledby="dropdownMenuButton">
                    <div class="row p-2 my-3 align-items-center">
                        <div class="col-sm">
                            <h3 class="text-left">Range of Markets</h3>
                            <p class="text-left">Trade 5,500+ global markets including 80+ forex pairs, thousands of shares, popular cryptocurrencies and more.</p>
                            <button class="mx-2 border p-1 rounded bg-warning btn"><a href="/market" class="text-dark text-decoration-none">VIEW MARKET</a></button>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h6><a href="/market" class="text-dark text-decoration-none">POPULAR MARKETS</a></h6></li>
                                <li class="list-group-item"><a href="/market/usd-eur" class="text-dark text-decoration-none">USD/EUR</a></li>
                                <li class="list-group-item"><a href="/market/gold-usd" class="text-dark text-decoration-none">GOLD/USD</a></li>
                                <li class="list-group-item"><a href="/market/eur-gbp" class="text-dark text-decoration-none">EUR/GBP</a></li>
                                <li class="list-group-item"><a href="/market/gold-eur" class="text-dark text-decoration-none">GOLD/EUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/services" class="text-white text-decoration-none">SERVICES</a></li>
            <div class="dropdown">
                <li class="mx-2 btn dropdown-toggle btn-outline-success text-white border border-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="/education" class="text-white text-decoration-none">EDUCATION</a></li>
                <div class="dropdown-menu" style="width: 200%;left:-50%" aria-labelledby="dropdownMenuButton">
                    <div class="row p-2 my-3 align-items-center">
                        <div class="col-sm">
                            <h3 class="text-left">Trading News and Research</h3>
                            <p class="text-left">Stay informed with real-time market insights, actionable trade ideas and professional guidance.</p>
                            <button class="mx-2 border p-1 rounded bg-warning btn"><a href="/education/news" class="text-dark text-decoration-none">VIEW NEWS</a></button>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h6><a href="/market" class="text-dark text-decoration-none">Market Education</a></h6></li>
                                <li class="list-group-item"><a href="/education/news" class="text-dark text-decoration-none">Lastest News</a></li>
                                <li class="list-group-item"><a href="/support" class="text-dark text-decoration-none">Trade Ideas</a></li>
                                <li class="list-group-item"><a href="/education/calendar" class="text-dark text-decoration-none">Ecodomic Calendar</a></li>
                                <li class="list-group-item"><a href="/services" class="text-dark text-decoration-none">Market InSights</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/aboutUs" class="text-white text-decoration-none">ABOUT US</a></li>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/support" class="text-white text-decoration-none">SUPPORT</a></li>
        @else
            <div class="dropdown">
                <li class="mx-2 btn dropdown-toggle btn-outline-success text-white border border-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="/market" class="text-white text-decoration-none">MARKET</a></li>
                <div class="dropdown-menu" style="width: 200%;left:-50%" aria-labelledby="dropdownMenuButton">
                    <div class="row p-2 my-3 align-items-center">
                        <div class="col-sm">
                            <h3 class="text-left">Range of Markets</h3>
                            <p class="text-left">Trade 5,500+ global markets including 80+ forex pairs, thousands of shares, popular cryptocurrencies and more.</p>
                            <button class="mx-2 border p-1 rounded bg-warning btn"><a href="/market" class="text-dark text-decoration-none">VIEW MARKET</a></button>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h6><a href="" class="text-dark text-decoration-none">POPULAR MARKETS</a></h6></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">USD/EUR</a></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">GOLD/USD</a></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">EUR/GPB</a></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">GOLD/EUR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/services" class="text-white text-decoration-none">SERVICES</a></li>
            <div class="dropdown">
                <li class="mx-2 btn dropdown-toggle btn-outline-success text-white border border-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><a href="/education" class="text-white text-decoration-none">EDUCATION</a></li>
                <div class="dropdown-menu" style="width: 200%;left:-50%" aria-labelledby="dropdownMenuButton">
                    <div class="row p-2 my-3 align-items-center">
                        <div class="col-sm">
                            <h3 class="text-left">Trading News and Research</h3>
                            <p class="text-left">Stay informed with real-time market insights, actionable trade ideas and professional guidance.</p>
                            <button class="mx-2 border p-1 rounded bg-warning btn"><a href="/education/news" class="text-dark text-decoration-none">VIEW NEWS</a></button>
                        </div>
                        <div class="col-sm">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><h6><a href="" class="text-dark text-decoration-none">Market Education</a></h6></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">Lastest News</a></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">Trade Ideas</a></li>
                                <li class="list-group-item"><a href="/education/calendar" class="text-dark text-decoration-none">Ecodomic Calendar</a></li>
                                <li class="list-group-item"><a href="" class="text-dark text-decoration-none">Market InSights</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/aboutUs" class="text-white text-decoration-none">ABOUT US</a></li>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/support" class="text-white text-decoration-none">SUPPORT</a></li>
            <li class="mx-2 my-4 btn btn-outline-success text-white border border-secondary"><a href="/account/{{Auth::user()->id}}" class="text-white text-decoration-none">ACCOUNT</a></li>
        @endif
    </ul>
</nav>