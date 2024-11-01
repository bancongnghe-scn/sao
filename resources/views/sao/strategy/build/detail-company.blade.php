@php
    $bread_crums = ['Chiến lược' => '', 'Tầm nhìn, sứ mệnh' => '', 'Xem chi tiết' => ''];
@endphp
@extends('layouts.app')
@section('sidebar')
    @include('sao.sidebar')
{{--    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">--}}
@endsection
@section('css')
    @vite(['resources/css/sao/strategy/build.css', 'resources/css/sao/common.css', 'resources/css/comment.css'])
@endsection
@section('content')
<div class="container-fluid">
    <section class="section-mission">
        <div class="row mb-3">
            <div class="row col-12 col-sm-12 col-lg-12 col-xl-9" style="margin-right: auto;">
                <div class="col-xl-12 col-md-12 mb-2 align-middle d-flex justify-content-start">
                    <span class="title-strategy mr-2">Chiến lược phát triển Tập đoàn SC tầm nhìn 2024-2030</span>
                    <div class="d-flex align-self-center justify-content-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center col-12 col-sm-12 col-lg-12 col-xl-3 mr-0 pr-0">
                <div class="d-flex justify-content-end">
                    <div>
                        <button class="btn btn-sm btn-outline-success mr-2 h-100 text-nowrap" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 4V20M4 12H20" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                            <span class="">{{ __('Thiết lập mục tiêu') }}</span>
                        </button>

                        <button class="btn btn-sm btn-success mr-2 h-100 text-nowrap" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7119 3.3641L2.24367 8.29104C2.09671 8.33249 1.96591 8.4178 1.86874 8.53558C1.77157 8.65336 1.71266 8.79799 1.69989 8.95015C1.68712 9.1023 1.7211 9.25473 1.79728 9.38706C1.87346 9.51939 1.98821 9.62531 2.1262 9.69068L10.1522 13.4925C10.3088 13.5666 10.4348 13.6927 10.509 13.8492L14.3107 21.8752C14.3761 22.0132 14.482 22.128 14.6144 22.2041C14.7467 22.2803 14.8991 22.3143 15.0513 22.3015C15.2034 22.2888 15.3481 22.2299 15.4658 22.1327C15.5836 22.0355 15.6689 21.9047 15.7104 21.7578L20.6373 4.28953C20.6735 4.16122 20.6749 4.02558 20.6412 3.89658C20.6075 3.76758 20.5401 3.64988 20.4458 3.55561C20.3515 3.46134 20.2339 3.3939 20.1048 3.36024C19.9758 3.32658 19.8402 3.32791 19.7119 3.3641Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.3926 13.6059L14.6352 9.36328" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>


                            <span class="">{{ __('Triển khai') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-9 left-panel text-center">
                @include('sao.strategy.build.content-detail-company.detail-content')
            </div>

            <!-- Phần bên phải -->
            <div class="col-12 col-sm-12 col-lg-12 col-xl-3 right-panel">

                <div class="info-container">
                    <div class="info-header d-flex align-self-center justify-content-between align-middle">
                        <div class="d-flex">
                            <span class="title-info text-nowrap">Thông tin chung </span>
                            <div class="d-flex align-self-center justify-content-center ml-2">
                                <span class="status-gray" style="width: 80px">
                                    Mới tạo
                                </span>
                            </div>
                        </div>

                        <button class="btn">
                            <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.75 21.5V19.3284C2.75 18.9969 2.8817 18.679 3.11611 18.4445L16.5303 5.03033C17.342 4.21865 18.658 4.21865 19.4697 5.03033C20.2813 5.84201 20.2813 7.15799 19.4697 7.96967L6.05546 21.3839C5.82104 21.6183 5.50309 21.75 5.17157 21.75H3C2.86193 21.75 2.75 21.6381 2.75 21.5Z" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 7.5L17 9.5" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>

                    <div class="info-content">
                        <div class="info-item">
                            <strong>Năm áp dụng</strong>
                            <span>2024-2030</span>
                        </div>
                        <div class="info-item">
                            <strong>Người tạo</strong>
                            <span>Tạ Mạnh Hoàng - Tổng GD</span>
                        </div>
                        <div class="info-item full-width">
                            <strong>Kế hoạch liên kết</strong>
                            <a href="#">Kế hoạch chiến lược phát triển tập đoàn Sconnect 2024-2030</a>
                        </div>
                        <div class="info-item full-width">
                            <strong>Mô tả</strong>
                            <p class="mt-0 mb-0">Khóa học Power BI Online giúp người học có thể tạo ra các báo cáo và biểu đồ theo cách chuyên nghiệp...</p>
                        </div>
                        <div class="info-item full-width">
                            <strong>Tài liệu đính kèm</strong>
                            <a href="#">Phụ lục</a>
                        </div>
                    </div>
                </div>

                <div class="info-container">
                    <div class="container p-2" style="background: #fff;border-radius: 7px">
                        <span id="tab-container" class="d-inline-block">
                            <ul id="ul-tab-comment" class="nav nav-tabs" style="background-color: #ffffff; border: 0; white-space: nowrap; flex-flow: nowrap;border-bottom:1px solid #e9ecef" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#comments" class="tab-show active" tab-value="done" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                        Bình luận (<span class="totalComment">0</span>)
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#histories" class="tab-show " tab-value="budget" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        Lịch sử (<span class="totalHistory">0</span>)
                                    </a>
                                </li>
                            </ul>
                        </span>
                        <div class="tab-content mr-3">
                            <div class="tab-pane fade show active" id="comments" role="tabpanel">
                                <div class="box-column row">
                                    <div class="col-12 pt-3 pb-2">
                                        <div class="form-group">
                                            <div class="proposal-comment">
                                                @include('comment.form-create-comment', ['comment_type' => 2])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="histories" role="tabpanel">
                                <div class="box-column row">
                                    <div class="col-12 pt-3 pb-2">
                                        <div class="form-group">
                                            <div class="history">
                                                <div class="content-history overflow-auto">
                                                    <table class="table table-bordered" id="table-history">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">Thời gian</th>
                                                            <th scope="col">Nội dung</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('sao.strategy.build.popup.popup-create-strategic-objectives')
</div>
@endsection
@section('js')
    @vite(['resources/js/sao/strategy/build.js'])
{{--    <script src="/plugins/select2/js/select2.full.min.js"></script>--}}
@endsection
