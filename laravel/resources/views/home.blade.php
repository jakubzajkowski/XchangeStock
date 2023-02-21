@extends('layout.root')
@section('home')
    <main class="w-100 text-white">
        @include('home.section1', ['power'=> $power])
        @include('home.section2')
        @include('home.section3')
        @include('home.section4')
        @include('home.section5')
        @include('home.section6')
        @include('home.section7')
        @include('home.section8')
    </main>
    <script src="{{asset("js/home/home.js")}}"></script>
@endsection