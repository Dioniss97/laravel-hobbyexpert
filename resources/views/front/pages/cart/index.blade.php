@extends('front.layout.master')

@section('title') Carrito @endsection

@section('description') Esto es el carrito @endsection
@section('keywords') carrito, comprar @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.cart.desktop.cart')
    @endif
    @if($agent->isMobile())
        @include('front.pages.cart.mobile.cart')
    @endif
@endsection