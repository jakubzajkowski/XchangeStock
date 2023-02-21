@extends('layout.root')
@section('calendar')
<script src="{{asset("js/education/calendar/main/index.js")}}" type="module" defer></script>
<link href="{{asset('css/calendar.css')}}" rel="stylesheet">
<main class="w-100 text-dark">
    <section class="w-100 mx-auto">
        <div class="bg-primary w-100 p-5">
            <div class="w-75 mx-auto bg-white p-1">
                <h1 class="p-2">Economic Calendar</h1>
            </div>
        </div>
    </section>
    <section class="w-100 text-dark my-3">
        <div class="container w-75 p-2 mx-2 mx-auto">
            <h2 class="today--date text-center my-5"></h2>
            <div class="row p-2 align-items-center">
                <div class="col-sm text-center">
                    <h3>US CPI</h3>
                    <p>Tuesday, February 14</p>
                    <p>13:30 GMT</p>
                    <p>US inflation has been falling and the Fed has responded by slowing the pace of its rate hikes to 25 basis points. It looked like the Fed would hike rates one more time, in March, before pausing. But after a much stronger jobs report, the probability of two more hikes has shot higher. If CPI comes in hotter, then this could further boost those expectations.</p>
                </div>
                <div class="col-sm text-center">
                    <h3>US CPI</h3>
                    <p>Tuesday, February 14</p>
                    <p>13:30 GMT</p>
                    <p>US inflation has been falling and the Fed has responded by slowing the pace of its rate hikes to 25 basis points. It looked like the Fed would hike rates one more time, in March, before pausing. But after a much stronger jobs report, the probability of two more hikes has shot higher. If CPI comes in hotter, then this could further boost those expectations.</p>
                </div>
                <div class="col-sm text-center">
                    <h3>US CPI</h3>
                    <p>Tuesday, February 14</p>
                    <p>13:30 GMT</p>
                    <p>US inflation has been falling and the Fed has responded by slowing the pace of its rate hikes to 25 basis points. It looked like the Fed would hike rates one more time, in March, before pausing. But after a much stronger jobs report, the probability of two more hikes has shot higher. If CPI comes in hotter, then this could further boost those expectations.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="w-100 text-dark my-3">
        <div class="container w-75 p-2 mx-2 mx-auto calendar">
            <div class="calendar__upper__baner">
                <svg class="calendar__back__icon calendar__icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z"/></svg>
                <h3 class="calendar__today"></h3>
                <svg class="calendar__next__icon calendar__icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM281 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L136 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l182.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L393 239c9.4 9.4 9.4 24.6 0 33.9L281 385z"/></svg>
            </div>
            <div class="calendar__main">
                <ul class="calendar__main__column">
                    <li class="days__name">Monday</li>
                    <li class="days__name">Tusday</li>
                    <li class="days__name">Wendsday</li>
                    <li class="days__name">Thursday</li>
                    <li class="days__name">Friday</li>
                    <li class="days__name">Saturday</li>
                    <li class="days__name">Sunday</li>
                </ul>
                <ul class="calendar__main__column">
                    <li class="days">31</li>
                    <li class="days">7</li>
                    <li class="days">14</li>
                    <li class="days">21</li>
                    <li class="days">28</li>
                    <li class="days">2</li>
                    <li class="days">2</li>
                </ul>
                <ul class="calendar__main__column">
                    <li class="days">31</li>
                    <li class="days">7</li>
                    <li class="days">14</li>
                    <li class="days">21</li>
                    <li class="days">28</li>
                    <li class="days">2</li>
                    <li class="days">2</li>
                </ul>
                <ul class="calendar__main__column">
                    <li class="days">1</li>
                    <li class="days">8</li>
                    <li class="days">15</li>
                    <li class="days">22</li>
                    <li class="days">29</li>
                    <li class="days">1</li>
                    <li class="days">1</li>
                </ul>
                <ul class="calendar__main__column">
                    <li class="days">2</li>
                    <li class="days">9</li>
                    <li class="days">16</li>
                    <li class="days">23</li>
                    <li class="days">30</li>
                    <li class="days">1</li>
                    <li class="days">1</li>
                </ul>
                <ul class="calendar__main__column">
                    <li class="days">3</li>
                    <li class="days">10</li>
                    <li class="days">17</li>
                    <li class="days">24</li>
                    <li class="days">31</li>
                    <li class="days">1</li>
                    <li class="days">1</li>
                </ul>
                <ul class="calendar__main__column">
                    <li class="days">1</li>
                    <li class="days">1</li>
                    <li class="days">2</li>
                    <li class="days">3</li>
                    <li class="days">4</li>
                    <li class="days">5</li>
                    <li class="days">6</li>
                </ul>
            </div>
        </div>
        <div class="container__events w-75 p-2 mx-auto">
            
        </div>
    </section>
    <section class="w-100 text-dark bg-warning p-5">
        <h2 class="mx-auto text-center">Get started with FOREX.com today</h2>
        <button  class="mx-auto my-4 text-warning text-center d-block btn btn-light">VIEW ALL FAQS</button>
        <p class="mx-auto text-center text-light" style="font-size: 0.9rem">Or, <a href="" class="text-light">give a demo account a test drive</a></p>
    </section>
    @include('home/section8')
</main>
@endsection