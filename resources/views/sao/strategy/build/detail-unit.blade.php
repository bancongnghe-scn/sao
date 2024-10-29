@php
    $bread_crums = ['Chiến lược' => '', 'Tầm nhìn, sứ mệnh' => '', 'Xem chi tiết' => ''];
@endphp
@extends('layouts.app')
@section('sidebar')
    @include('sao.sidebar')
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
@endsection
@section('css')
    @vite(['resources/css/sao/strategy/build.css', 'resources/css/sao/common.css'])
@endsection
@section('content')
    <div class="container-fluid">
        <section class="section-mission">
            <div class="row mb-3">
                <div class="row col-12 col-sm-12 col-lg-12 col-xl-9" style="margin-right: auto;">
                    <div class="col-xl-12 col-md-12 mb-2 align-middle d-flex justify-content-start">
                        <span class="title-strategy mr-2">Chiến lược phát triển Ban HCNS tầm nhìn nhìn 2024-2030</span>
                        <span class="status-blue p-1 text-center">
                            Chờ duyệt
                        </span>
                    </div>
                </div>
                <div class="row align-items-center col-12 col-sm-12 col-lg-12 col-xl-3 mr-0 pr-0">
                    <div class="d-flex justify-content-end">
                        <div>
                            <button class="btn btn-sm btn-outline-danger mr-2 h-100 text-nowrap" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.75 5.25L5.25 18.75" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.75 18.75L5.25 5.25" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="">{{ __('Từ chối') }}</span>
                            </button>
                            <button class="btn btn-sm btn-success mr-2 h-100 text-nowrap" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.25 6.75L9.75 17.2495L4.5 12" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="">{{ __('Phê duyệt') }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-lg-12 col-xl-9 left-panel text-center">
                    @include('sao.strategy.build.content-detail-unit.browse')
                </div>

                <!-- Phần bên phải -->
                <div class="col-12 col-sm-12 col-lg-12 col-xl-3 right-panel">
                    <div class="info-container">
                        <div class="info-header">
                            <h2>Thông tin chung</h2>
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
                                <p>Khóa học Power BI Online giúp người học có thể tạo ra các báo cáo và biểu đồ theo cách chuyên nghiệp...</p>
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
                                        Bình luận (<span class="totalComment"></span>)
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#histories" class="tab-show " tab-value="budget" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        Lịch sử (<span class="totalHistory"></span>)
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
                                                    @include('comment.form-create-comment', [
                                                        'comment_type' => 1,
                                                    ])
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
    <script src="/plugins/select2/js/select2.full.min.js"></script>
@endsection
