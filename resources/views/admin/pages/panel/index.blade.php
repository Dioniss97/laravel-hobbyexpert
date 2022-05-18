@extends('admin.layout.master')

@section('description') Página de administración @endsection
@section('keywords') administración, panel, editar @endsection

@section('title') Panel de administración @endsection

@section('content')
    @if($agent->isDesktop())
        @include('admin.pages.panel.desktop.panel')
    @endif
    @if($agent->isMobile())
        @include('admin.pages.panel.mobile.panel')
    @endif
@endsection