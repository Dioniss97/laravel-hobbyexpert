@extends('admin.layout.master')

@section('description') Visita nuestra tienda @endsection
@section('keywords') tienda, productos, replicas @endsection

@section('title') Nuestros Productos @endsection

@section('content')
    @if($agent->isDesktop())
        @include('admin.pages.products.desktop.products')
    @endif
    @if($agent->isMobile())
        @include('admin.pages.products.mobile.products')
    @endif
@endsection