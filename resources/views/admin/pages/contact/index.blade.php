@extends('admin.layout.master')

@section('description') Esto es la pagina de contacto @endsection
@section('keywords') contacto, formulario, información, horario @endsection

@section('title') Contacto @endsection

@section('content')
    @if($agent->isDesktop())
        @include('admin.pages.contact.desktop.contact')
    @endif
    @if($agent->isMobile())
        @include('admin.pages.contact.mobile.contact')
    @endif
@endsection