@extends('layout.root')
@section('newsPages')
<main class="w-100 text-dark">
    <section class="w-100 mx-auto my-4">
      <div class="container w-100 p-5 mx-2 text-dark mx-auto">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="d-inline-block my-4 display-6">{{$news['title']}}</h3>
            <div class="d-inline">
                <img style="width: 2.5rem;" src="https://cdn-icons-png.flaticon.com/128/3256/3256013.png" alt="twitter">
                <img style="width: 2.5rem;" src="https://cdn-icons-png.flaticon.com/128/174/174848.png" alt="facebook">
            </div>
        </div>
        <p style="font-size: 0.9rem">{{$news['author']}}</p>
        <p style="font-size: 0.8rem">{{$news['created_at']}}</p>
        <p style="font-size: 1.2rem">{{$news['content0']}}</p>
        <img class="w-100" src="{{$news['img0']}}" alt="">
      </div>
    </section>
    <section class="w-100 text-dark">
        <div class="container w-75 p-2 mx-2 text-dark mx-auto">
            <div class="row p-2 my-5 align-items-center">
                <div class="col-sm-9">
                    <p class="my-4">{{$news['content1']}}</p>
                    <img class="w-100" src="{{$news['img1']}}" alt="">
                    <p class="my-4">{{$news['content2']}}</p>
                </div>
                <div class="col-sm-3">
                    <div class="p-5 text-center"  style="background: rgb(243, 159, 4);">
                        <h4 class="text-white m-2">Trade Strategy</h4>
                        <p class="btn btn-light">OPEN AN ACCOUNT</p>
                    </div>
                    <div class="my-3 p-5 text-center" style="background: rgb(222, 222, 224);">
                        <h4>Current Forex Rates</h4>
                        <table class="w-100 table table-striped">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('home/section8')
    <script>var exports = {};</script>
    <script type="module" src="../../js/newsPagesTableInit.js"></script>
</main>
@endsection