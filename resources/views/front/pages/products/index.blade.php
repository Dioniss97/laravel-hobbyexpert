@extends('front.layout.master')

@section('description') Visita nuestra tienda @endsection
@section('keywords') tienda, productos, replicas @endsection

@section('title') Nuestros Productos @endsection

@section('content')
    @if($agent->isDesktop())
        @include('front.pages.products.desktop.products' , ['products' => $products, 'product_categories' => $product_categories])
    @endif
    @if($agent->isMobile())
        @include('front.pages.products.mobile.products' , ['products' => $products, 'product_categories' => $product_categories])
    @endif
@endsection