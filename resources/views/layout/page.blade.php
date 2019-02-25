@extends('layout.layout')
@section('page')
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    <button class="btn btn-circle btn-primary scroll-top"><i class="fa fa-angle-up"></i></button>
@endsection