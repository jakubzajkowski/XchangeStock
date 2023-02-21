<script src="{{asset("js/market/calendar.js")}}" defer></script>
<section class="w-100 text-dark">
    <div class="container w-75 p-2 mx-2 text-dark mx-auto">
        <div class="row p-2 my-5">
            <div class="col-sm col-md-8 p-4 mx-2">
               <h5 class="mb-4">LATEST RESEARCH</h5>
               <h3>{{$news[0]}}</h3>
               <p style="font-weight: 600">{{$news[1]}}</p>
               <p style="font-size: 0.8rem">{{$news[3]}}</p>
               <p>{{$news[2]}}</p>
               <p style="font-size: 0.8rem">TAGS: <span class="text-success">BoJ, Forex, Trade Ideas, USD/JPY, Volatility</span></p>
               <button class="mx-2 mt-4 border p-2 rounded bg-success btn"><a href="/register" class="text-white text-decoration-none">VIEW LATEST RESEARCH</a></button>
            </div>
            <div class="col-sm p-4 mx-2 text-center" style="background-color:rgb(238, 237, 237);">
                <h4 class="text-start mb-3">Economic Calendar</h4>
              <div class="p-2 xd"></div>
            </div>
        </div>
    </div>
</section>