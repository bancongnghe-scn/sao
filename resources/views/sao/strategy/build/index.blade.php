@php
    $bread_crums = ['Chiến lược' => '', 'Xây dựng chiến lược' => '', 'Danh sách Chiến lược' => ''];
@endphp
@extends('layouts.app')
@section('sidebar')
    @include('sao.sidebar')
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @vite(['resources/css/sao/strategy/build.css', 'resources/css/sao/common.css'])
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row bg-white m-auto w-100">
            <ul id="ul-tab" class="nav nav-tabs">
                <li class="nav-item">
                    <a href="#tab-company" class="active" data-bs-toggle="tab" data-tab-id="1" id="company_tab">
                        Tổng công ty
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab-unit" data-bs-toggle="tab" data-tab-id="2" id="unit_tab">
                        Đơn vị
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#tab-map" data-bs-toggle="tab" data-tab-id="3" id="map_tab">
                        Bản đồ chiến lược
                    </a>
                </li>
            </ul>
        </div>
        <div class="tab-content pt-3">
            @include('sao.strategy.build.table.company.tab-company')
            @include('sao.strategy.build.table.company.tab-unit')
            @include('sao.strategy.build.table.company.tab-map')

{{--            @include('sao.strategy.build.table.unit.tab-company')--}}
{{--            @include('sao.strategy.build.table.unit.tab-unit')--}}
{{--            @include('sao.strategy.build.table.unit.tab-map')--}}
        </div>
    </div>

    @include('sao.strategy.build.popup.popup-create')
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @vite(['resources/js/sao/strategy/build.js'])
@endsection
