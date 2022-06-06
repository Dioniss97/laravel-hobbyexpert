@extends('front.layout.master')

@section('description') Preguntas frecuentemente respondidas @endsection
@section('keywords') pregunta, error, problema, faqs @endsection

@section('title') Preguntas Frecuentes @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.components.desktop.pages-title', ['title' => 'Preguntas Frecuentemente Respondidas'])
        @include('front.pages.faqs.desktop.faqs', ['faqs' => $faqs])
    @endif

    @if($agent->isMobile())
        @include('front.pages.faqs.mobile.faqs', ['faqs' => $faqs])
    @endif
@endsection