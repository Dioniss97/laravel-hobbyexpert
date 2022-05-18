@extends('front.layout.master')

@section('description') Esto es el checkout @endsection
@section('keywords') checkout, comprar, replica @endsection

@section('title') Pagar @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.checkout.desktop.checkout')
    @endif
    @if($agent->isMobile())
        @include('front.pages.checkout.mobile.checkout')
    @endif
@endsection