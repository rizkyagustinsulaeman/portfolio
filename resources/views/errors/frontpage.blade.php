@extends('frontpage.layouts.main')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="{{ template_frontpage('img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>@yield('code') @yield('title')</h2>
                    <div class="breadcrumb__links">
                        <a href="{{route('web.index')}}">Home</a>
                        <span>@yield('message').</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
