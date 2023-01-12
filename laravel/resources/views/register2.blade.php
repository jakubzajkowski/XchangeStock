@extends('layout.root')
@section('register2')
<main class="w-100 text-dark">
    <section class="w-100 mx-auto bg-primary">
        <div class="mx-auto position-relative d-flex justify-content-between m-5 step--baner">
            <h3 class="step--baner--step step--1" >1</h3>
            <h3 class="step--baner--step step--2 step--1-first_page" >2</h3>
            <h3 class="step--baner--step step--3" >3</h3>
            <h3 class="step--baner--step step--4" >4</h3>
        </div>
    </section>
    <section class="w-100 mx-auto">
      <div class="container w-75 p-2 mx-2 text-dark mx-auto">
        <div class="row p-2">
            <div class="col-sm p-4">
              <h2>About You <span class="mx-5 apply--info" style="font-size: 0.7rem">Apply within 5 minutes</span></h2>
              <form class="form-horizontal w-100" action="http://127.0.0.1:8000/register2" method="POST">
                @csrf
                <div class="form-group">
                  <label class="control-label col-sm-2" for="job">Job Titles:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control m-2" id="job" placeholder="Enter job" name="job">
                    <select name="person" id="" class="mx-2">
                      <option value="private">private</option>
                      <option value="student">student</option>
                    </select>
                    <span class="text-danger" style="font-size: 0.7rem">@error('job'){{$message}}*@enderror</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Company Email:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control m-2" id="company" placeholder="Enter Company Email" name="company">
                    <span class="text-danger" style="font-size: 0.7rem">@error('company'){{$message}}*@enderror</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Your Hobbies:</label>
                  <div class="col-sm-10">          
                    <input type="text" class="form-control m-2" id="hobby" placeholder="Enter Hobby" name="hobby">
                    <span class="text-danger" style="font-size: 0.7rem">@error('hobby'){{$message}}*@enderror</span>
                  </div>
                </div>
                </div>
                <div class="form-group">        
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success m-3">Save And Continue</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-sm p-4">
              <div class="p-5 text-center text-white help--baner" style="background-color: rgb(110, 197, 125)">
                <h3>NEED HELP?</h3>
                <h4 class="btn text-success btn-light mt-5">LIVE CHAT</h4>
                <svg class="help--baner--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
                <svg class="help--baner--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M447.1 0h-384c-35.25 0-64 28.75-64 63.1v287.1c0 35.25 28.75 63.1 64 63.1h96v83.98c0 9.836 11.02 15.55 19.12 9.7l124.9-93.68h144c35.25 0 64-28.75 64-63.1V63.1C511.1 28.75 483.2 0 447.1 0zM464 352c0 8.75-7.25 16-16 16h-160l-80 60v-60H64c-8.75 0-16-7.25-16-16V64c0-8.75 7.25-16 16-16h384c8.75 0 16 7.25 16 16V352z"/></svg>
              </div>
            </div>
        </div>
    </div>
    </section>
</main>

@endsection