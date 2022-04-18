@extends('front.layout.master')


@section('nav')
@include('dashboard.include.nav')
@endsection


@section('content')
@livewire('front-page')
@endsection