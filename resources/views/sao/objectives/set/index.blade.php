@php
    $bread_crums = ['Mục tiêu' => '', 'Bộ mục tiêu' => '', 'Danh sách bộ mục tiêu' => ''];
@endphp
@extends('layouts.app')
@section('sidebar')
    @include('sao.sidebar')
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @vite(['resources/css/sao/objectives/set.css', 'resources/css/sao/common.css'])
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-white m-auto w-100">
            <ul id="ul-tab" class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#tab-company" class="active" data-bs-toggle="tab" data-tab-id="1" id="company_tab">
                        Bộ mục tiêu công ty
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab-unit" data-bs-toggle="tab" data-tab-id="2" id="unit_tab">
                        Bộ mục tiêu đơn vị
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content pt-3">
            @include('sao.objectives.set.table.company.tab-company')
            @include('sao.objectives.set.table.company.tab-unit')
        </div>
    </div>

    @include('sao.objectives.set.popup.popup-create')
@endsection
@section('js')
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        @vite(['resources/js/sao/strategy/build.js'])
@endsection
