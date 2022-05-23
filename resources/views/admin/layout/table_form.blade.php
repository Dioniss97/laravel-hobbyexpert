@extends('admin.layout.master')

@section('content')
    <div class="panel">
        <div class="desktop-two-columns-aside">
            <div class="column-aside">
                @yield('table')
            </div>
            <div class="column-main">
                @yield('form')
            </div>
        </div>
    </div>
@endsection