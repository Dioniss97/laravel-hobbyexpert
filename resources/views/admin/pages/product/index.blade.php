@extends('admin.layout.master')

@section('description') Vista del producto @endsection
@section('keywords') producto, replica, vista @endsection

@section('title') Ver producto @endsection

@section('content')
    @if($agent->isDesktop())
        @include('admin.pages.product.desktop.product')
    @endif
    @if($agent->isMobile())
        @include('admin.pages.product.mobile.product')
    @endif
@endsection