@extends('layout.root')
@section('news')
<script src="{{asset("js/education/news/newsFilter.js")}}" defer></script>
<main class="w-100 text-dark">
    <section class="w-100 mx-auto">
        <div class="bg-primary w-100 p-5">
            <div class="w-75 mx-auto bg-white p-1">
                <h1 class="p-2">Trading News and Research</h1>
            </div>
        </div>
            <div class="container w-75 p-2 mx-2 mx-auto">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <svg style="width:2rem;margin:1rem;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 416c0-17.7 14.3-32 32-32l54.7 0c12.3-28.3 40.5-48 73.3-48s61 19.7 73.3 48L480 384c17.7 0 32 14.3 32 32s-14.3 32-32 32l-246.7 0c-12.3 28.3-40.5 48-73.3 48s-61-19.7-73.3-48L32 448c-17.7 0-32-14.3-32-32zm192 0c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zM384 256c0-17.7-14.3-32-32-32s-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32zm-32-80c32.8 0 61 19.7 73.3 48l54.7 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-54.7 0c-12.3 28.3-40.5 48-73.3 48s-61-19.7-73.3-48L32 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l246.7 0c12.3-28.3 40.5-48 73.3-48zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32s32-14.3 32-32s-14.3-32-32-32zm73.3 0L480 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-214.7 0c-12.3 28.3-40.5 48-73.3 48s-61-19.7-73.3-48L32 128C14.3 128 0 113.7 0 96S14.3 64 32 64l86.7 0C131 35.7 159.2 16 192 16s61 19.7 73.3 48z"/></svg>
                            <h6 class="d-inline">SHOW FILTERS</h6>
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body"><div class="container w-100 p-2 text-dark mx-auto">
                        <div class="row p-2 m-2 text-center border align-items-center">
                            <div class="col-sm">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action"><h5>Authors</h5></li>
                                    <li class="list-group-item list-group-item-action "><input class="option-authors" type="checkbox" class="mx-2" value="MATT SIMPSON">MATT SIMPSON</li>
                                    <li class="list-group-item list-group-item-action "><input class="option-authors" type="checkbox" class="mx-2" value="FIONA CINCOTTA">FIONA CINCOTTA</li>
                                    <li class="list-group-item list-group-item-action "><input class="option-authors" type="checkbox" class="mx-2" value="JOSHUA WARNER">JOSHUA WARNER</li>
                                    <li class="list-group-item list-group-item-action "><input class="option-authors" type="checkbox" class="mx-2" value="JOE PERRY">JOE PERRY</li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-action"><h5>Currency</h5></li>
                                    <li class="list-group-item list-group-item-action "><input class="option-currency" type="checkbox" class="mx-2" value="usd-eur">usd-eur</li>
                                    <li class="list-group-item list-group-item-action "><input class="option-currency" type="checkbox" class="mx-2" value="gbp-usd">gbp-usd</li>
                                    <li class="list-group-item list-group-item-action "><input class="option-currency" type="checkbox" class="mx-2" value="chf-eur">chf-eur</li>
                                    <li class="list-group-item list-group-item-action "><input class="option-currency" type="checkbox" class="mx-2" value="gold-usd">gold-usd</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                  </div>
                <div class="row p-2 align-items-center">
                    <div class="col-sm-9">
                        <div class="row my-5 align-items-center d-flex justify-content-start">
                            @foreach ($news as $key=>$item)
                            @if ($key==0)
                            <div class="col-sm-12 my-2 news align-self-start" data-author="{{$item['author']}}" data-currency="{{$item['currency']}}">
                                <a href="/education/news/{{str_replace(" ","-",$item['title'])}}" class="text-dark text-decoration-none">
                                    <img src="{{$item['img0']}}" class="w-100" alt="">
                                    <div class="border p-3" style="background-color: rgb(245, 245, 245)">
                                        <h4>{{$item['title']}}</h4>
                                        <p>{{$item['author']}}</p>
                                        <p>{{$item['created_at']}}</p>
                                    </div>
                                </a>
                            </div>
                            @else
                            <div class="col-sm-6 my-2 news align-self-start" data-author="{{$item['author']}}" data-currency="{{$item['currency']}}">
                                <a href="/education/news/{{str_replace(" ","-",$item['title'])}}" class="text-dark text-decoration-none">
                                    <img src="{{$item['img0']}}" class="w-100" alt="">
                                    <div class="border p-3" style="background-color: rgb(245, 245, 245)">
                                        <h4>{{$item['title']}}</h4>
                                        <p>{{$item['author']}}</p>
                                        <p>{{$item['created_at']}}{{$key}}</p>
                                    </div>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row p-2 align-items-center">
                            <div class="col-sm p-4 text-center text-white" style="background-color: rgb(155, 219, 51)">
                                <h4>OUTLOOK 2023</h4>
                                <p>Get ahead of the markets with our 2023 outlook. Exclusive insight on tech, forex, commodities and much more from our team of analysts.</p>
                                <p><a href="" class="text-white">DOWNLOAD NOW</a></p>
                            </div>
                        </div>
                        <div class="row p-2 my-5 align-items-center">
                            <div class="col-sm p-4 text-center text-white" style="background-color: rgb(245, 158, 77)">
                                <h3>TRACK ECONOMIC EVENTS</h3>
                                <p>Stay ahead of the major market moves and learn what is driving the markets with our Economic Calendar.</p>
                                <p><a href="" class="text-white">View our calendar</a></p>
                            </div>
                        </div>
                        <div class="row p-2 my-5 align-items-center">
                            <div class="col-sm p-4 text-center text-white" style="background-color: rgb(55, 206, 186)">
                                <h3>TRACK ECONOMIC EVENTS</h3>
                                <p>Stay ahead of the major market moves and learn what is driving the markets with our Economic Calendar.</p>
                                <p><a href="" class="text-white">View our calendar</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>
    <section class="w-100 text-dark">
        <div class="container w-75 p-2 mx-2 text-dark mx-auto">
            <div class="row p-2 my-5 text-center">
                @foreach ($news as $key=>$item)
                <div class="col-sm-4 my-2">
                    <a href="/education/news/{{str_replace(" ","-",$item['title'])}}" class="text-dark text-decoration-none">
                        <img src="{{$item['img0']}}" class="w-100" alt="">
                        <div class="border p-3" style="background-color: rgb(245, 245, 245)">
                            <h4>{{$item['title']}}</h4>
                            <p>{{$item['author']}}</p>
                            <p>{{$item['created_at']}}{{$key}}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="w-100 text-dark bg-primary">
        <div class="container w-75 p-2 mx-2 text-white mx-auto">
            <div class="row p-2 align-items-center">
                <div class="col-sm">
                    <h3 class="text-left">It's Your World. Trade It.</h3>
                </div>
                <div class="col-sm">
                    <h3 class="text-end"><span class="h6">Part of</span> Forex.com <span class="h6">inc.</span></h3>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection