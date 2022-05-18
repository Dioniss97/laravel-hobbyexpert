@extends('front.layout.master')

@section('description') Preguntas frecuentemente respondidas @endsection
@section('keywords') pregunta, error, problema, faqs @endsection

@section('title') Preguntas Frecuentes @endsection

@section('content')
    @if($agent->isDesktop())
    @include('front.components.pages-title', ['title' => 'Preguntas Frecuentes'])
        @include('front.pages.faqs.desktop.faqs')
    @endif

    @if($agent->isMobile())
        @include('front.pages.faqs.mobile.faqs')
    @endif
@endsection