@extends('front.layout.master')

@section('description') Página de inicio @endsection
@section('keywords') inicio, home @endsection

@section('title') Inicio @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.home.desktop.home')
    @endif
    @if($agent->isMobile())
        @include('front.pages.home.mobile.home')
    @endif
@endsection