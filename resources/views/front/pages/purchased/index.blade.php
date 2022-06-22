@extends('front.layout.master')

@section('description') Visita nuestra tienda @endsection
@section('keywords') tienda, productos, replicas @endsection

@section('title') Hasta la próxima @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.purchased.desktop.purchased')
    @endif
    @if($agent->isMobile())
        @include('front.pages.purchased.mobile.purchased')
    @endif
@endsection