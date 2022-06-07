@extends('front.layout.master')

@section('description') Vista del producto @endsection
@section('keywords') producto, replica, vista @endsection

@section('title') Ver producto @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.product.desktop.product', ['product' => $product])
    @endif
    @if($agent->isMobile())
        @include('front.pages.product.mobile.product', ['product' => $product])
    @endif
@endsection