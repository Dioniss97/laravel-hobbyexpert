@extends('front.layout.master')

@section('description') Página de administración @endsection
@section('keywords') administración, panel, editar @endsection

@section('title') Panel de Administración @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.panel.desktop.panel')
    @endif
    @if($agent->isMobile())
        @include('front.pages.panel.mobile.panel')
    @endif
@endsection