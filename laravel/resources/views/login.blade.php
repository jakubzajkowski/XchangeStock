@extends('layout.root')
@section('login')
<script src="{{asset("js/login/login.js")}}" defer></script>
<link href="{{asset('css/login.css')}}" rel="stylesheet">
<main class="w-100 text-dark">
    <section class="w-100 mx-auto">
      <div class="container w-100 p-2 mx-2 text-dark mx-auto">
        <div class="row p-4">
            <div class="col-sm p-4">
              <form class="form-horizontal p-2" style="background-color: rgb(235, 241, 241)" action="http://127.0.0.1:8000/login" method="POST">
                @csrf
                <h3 class="mx-4 p-2">Web Trading</h3>
                <p class="p-4">High performance trading platform that's fully loaded for serious traders. <a href="/register" class="text-dark">Don't have an account?</a></p>   
                <div class="form-group mx-4 login--username my-5"> 
                    <input class="mx-2 w-75 p-1 login__username" type="text" name="username">
                    <span class="text-danger" style="display: block;font-size:0.8rem">@error('username'){{$message}}@enderror</span>
                </div>
                <div class="form-group mx-4 login--login my-5"> 
                    <input class="mx-2 w-75 p-1 login__password" type="password" name="password">
                    <span class="text-danger" style="display: block;font-size:0.8rem">@error('password'){{$message}}@enderror</span>
                </div>
                <div class="form-group mx-4 d-flex justify-content-between"> 
                    <label for="remember"  style="font-size: 0.8rem"><input class="mx-2" type="checkbox" name="remember"> Remember me</label>
                    <label for="forgot"><a href="" style="font-size: 0.8rem" class="text-dark">Forgot password?</a></label>
                </div>
                <div class="form-group mx-4 my-4"> 
                <div class="col-sm-offset-2 col-sm-10">
                    <span class="text-danger my-2" style="display: block;font-size:0.8rem">{{$error}}</span>
                <button type="submit" class="btn btn-success">LOG IN</button>
                </div>
                </div>
              </form>
            </div>
            <div class="col-sm p-4">
              <div class="text-dark help--baner">
                <h2>Welcome to FOREX.com</h2>
                <p>Securely access and manage your account 24 hours a day, 7 days a week. Don't already have an account? Open one now.</p>
                <p>When markets are on the move, funding your account should be quick and easy. That’s why we’re pleased to announce that from today, you’ll able to fund your trading account with the below methods:</p>
                <img style="width: 100%"src="https://www.forex.com/~/media/forex/images/landing-pages/new-css/payment-methods/cima-payment-methods.png?w=450" alt="">
                <hr>
                <img class="mx-2" style="width: 20%;float:left" src="https://www.forex.com/~/media/forex/images/services/rebate-program/active-trader-laurel-hero-3.svg?h=50&w=50" alt="">
                <h6 style="font-size: 1.05rem"> Active Trader Rebate Program</h6>
                <h6 style="font-size: 1.05rem">Reward yourself the more you trade</h6>
                <h6 style="font-size: 1.05rem">Did you know you can earn up to $10 per million traded?</h6>
                <p>Designed for high-volume currency traders, you’ll get exclusive benefits:</p>
                <ul>
                    <li>Reduce your trading costs</li>
                    <li>One-on-one support from an experienced Market Strategist</li>
                    <li>Reimbursement on bank fees for wire transfer</li>
                </ul>
                <p>With our Active Trader Program you receive a cash payment every single month.</p>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section class="w-100 text-dark">
        <h2 class="mx-auto text-center">Have questions? We’ve got answers.</h2>
        <div class="container w-75 p-2 mx-2 text-dark mx-auto">
            <div class="row p-2 my-5">
                <div class="col-sm p-4 mx-2" >
                    <h5 class="text-center">Why do I receive an “Authorization Failed” message when trying to log in?</h5>
                    <p class="text-center">This may be a result of an incorrect username or password. Click here to easily retrieve your login credentials...Read more</p>
                </div>
                <div class="col-sm p-4 mx-2" >
                    <h5 class="text-center">Can I download FOREX.com Desktop on a Mac?</h5>
                    <p class="text-center">There are several options for Mac users who would like to download FOREX.com Desktop...Learn more</p>
                </div>
                <div class="col-sm p-4 mx-2" >
                    <h5 class="text-center">Can I download FOREX.com Desktop on a Mac?</h5>
                    <p class="text-center">There are several options for Mac user who would like to download MetaTrader...Learn More</p>
                </div>
            </div>
            <button class="mx-auto my-5 text-center d-block btn btn-success">VIEW ALL FAQS</button>
        </div>
    </section>
    <section class="w-100 text-dark bg-warning p-5">
        <h2 class="mx-auto text-center">Get started with FOREX.com today</h2>
        <button  class="mx-auto my-4 text-warning text-center d-block btn btn-light">VIEW ALL FAQS</button>
        <p class="mx-auto text-center text-light" style="font-size: 0.9rem">Or, <a href="" class="text-light">give a demo account a test drive</a></p>
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