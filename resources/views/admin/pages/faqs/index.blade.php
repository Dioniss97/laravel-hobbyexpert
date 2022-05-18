@extends('admin.layout.master')

@section('description') Preguntas frecuentemente respondidas @endsection
@section('keywords') pregunta, error, problema, faqs @endsection

@section('title') Preguntas Frecuentes @endsection

@section('content')
    @if($agent->isDesktop())
        @include('admin.pages.faqs.desktop.faqs')
    @endif

    @if($agent->isMobile())
        @include('admin.pages.faqs.mobile.faqs')
    @endif
@endsection