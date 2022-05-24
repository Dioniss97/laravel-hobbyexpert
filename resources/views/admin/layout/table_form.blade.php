@extends('admin.layout.master')

@section('content')
    <div class="panel">
        <div class="desktop-two-columns-aside">
            <div class="column-aside">
                <div class="table-container">
                    @yield('table')
                </div>
            </div>
            <div class="column-main">
                <div class="form-container">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
@endsection