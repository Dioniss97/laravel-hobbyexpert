@extends('admin.layout.master')

@section('description') Esto es el carrito @endsection
@section('keywords') carrito, comprar @endsection

@section('title') Carrito @endsection

@section('content')
    @if($agent->isDesktop())
        @include('admin.pages.cart.desktop.cart')
    @endif
    @if($agent->isMobile())
        @include('admin.pages.cart.mobile.cart')
    @endif
@endsection