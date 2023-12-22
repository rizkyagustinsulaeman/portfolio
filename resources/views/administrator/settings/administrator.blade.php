@extends('administrator.layouts.main')

@section('content')
    @push('section_header')
        <h1>Settings</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="{{ route('admin.settings') }}">Settings</a></div>
            <div class="breadcrumb-item">Adminsitrator</div>
        </div>
    @endpush
    @push('section_title')
        Setting
    @endpush
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-large-icons">
                <div class="card-icon bg-main-background-color text-white">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="card-body">
                    <h4>Adminsitrator</h4>
                    <p>General Adminsitrator.</p>
                    <a href="{{route('admin.settings.admin.general')}}" class="card-cta">Change Setting <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
