@php
    $bread_crums = ['Chiến lược' => '', 'Tầm nhìn, sứ mệnh' => '', 'Xem chi tiết' => ''];
@endphp
@extends('layouts.app')
@section('sidebar')
    @include('sao.sidebar')
    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
@endsection
@section('css')
    @vite(['resources/css/sao/objectives/set.css', 'resources/css/sao/common.css', 'resources/css/comment.css'])
@endsection
@section('content')
<div class="container-fluid">
    <section class="section-mission">
        <div class="row mb-3">
            <div class="row col-12 col-sm-12 col-lg-12 col-xl-9" style="margin-right: auto;">
                <div class="col-xl-12 col-md-12 mb-2 align-middle d-flex justify-content-start">
                    <span class="title-strategy mr-2">Bộ 7 mục tiêu Tổng Công Ty năm 2025 </span>
                    <div class="d-flex align-self-center justify-content-center">
                        <span class="status-gray">
                            Mới tạo
                        </span>
                    </div>
                </div>
            </div>
            <div class="row align-items-center col-12 col-sm-12 col-lg-12 col-xl-3 mr-0 pr-0">
                <div class="d-flex justify-content-end">
                    <div>
                        <button class="btn btn-sm btn-success mr-2 h-100 text-nowrap" data-bs-target="#addCreateObjectivesCompany" data-bs-toggle="modal">
                            <i class="bi bi-plus"></i>
                            <span class="">{{ __('Thiết lập mục tiêu') }}</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12 col-xl-9 left-panel text-center">
                @include('sao.objectives.set.content-detail-company.new-create')
            </div>

            <!-- Phần bên phải -->
            <div class="col-12 col-sm-12 col-lg-12 col-xl-3 right-panel">

                <div class="container">
                        <span id="tab-container" class="d-inline-block">
                            <ul id="ul-tab-comment" class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#comments" class="tab-show active" tab-value="done" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                        Thông tin
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#histories" class="tab-show " tab-value="budget" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        Lịch sử
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
                                                            <strong>Chiến lược liên kết</strong>
                                                            <a href="#">Chiến lược phát triển tập đoàn Sconnect 2024-2030</a>
                                                        </div>
                                                        <div class="info-item full-width">
                                                            <strong>Kế hoạch liên kết</strong>
                                                            <a href="#">Kế hoạch chiến lược phát triển tập đoàn Sconnect 2024-2030</a>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="text-nowrap mb-1">
                                                                <span class="font-weight-bold text-nowrap">
                                                                    Phạm vi thiết lập mục tiêu
                                                                </span>
                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99935 0.166016C9.22101 0.166016 11.8327 2.77769 11.8327 5.99935C11.8327 9.22101 9.22101 11.8327 5.99935 11.8327C2.77769 11.8327 0.166016 9.22101 0.166016 5.99935C0.166016 2.77769 2.77769 0.166016 5.99935 0.166016ZM5.99935 1.33268C3.42202 1.33268 1.33268 3.42202 1.33268 5.99935C1.33268 8.57668 3.42202 10.666 5.99935 10.666C8.57668 10.666 10.666 8.57668 10.666 5.99935C10.666 3.42202 8.57668 1.33268 5.99935 1.33268ZM8.33268 4.83268C8.33268 3.54402 7.28801 2.49935 5.99935 2.49935C4.71068 2.49935 3.66602 3.54402 3.66602 4.83268H4.83268L4.83588 4.74561C4.88042 4.14194 5.3843 3.66602 5.99935 3.66602C6.64368 3.66602 7.16602 4.18835 7.16602 4.83268C7.16602 5.47681 6.64401 5.99902 5.99996 5.99935H5.99935C5.67718 5.99935 5.41602 6.26052 5.41602 6.58268V7.16602C5.41602 7.48818 5.67718 7.74935 5.99935 7.74935C6.32152 7.74935 6.58268 7.48818 6.58268 7.16602V7.09251C7.58906 6.83348 8.33268 5.91992 8.33268 4.83268ZM6.58268 9.49935V8.33268H5.41602V9.49935H6.58268Z" fill="#F7B61C"/>
                                                                </svg>
                                                            </label>
                                                            <div class="form-check ml-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    Tổng công ty
                                                                </label>
                                                            </div>
                                                            <div class="form-check ml-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    Đơn vị kinh doanh
                                                                </label>
                                                            </div>
                                                            <div class="form-check ml-2">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                                <label class="form-check-label" for="flexCheckChecked">
                                                                    Đơn vị hỗ trợ
                                                                </label>
                                                            </div>
                                                            <span class="error"></span>
                                                        </div>
                                                        <div class="info-item full-width">
                                                            <strong>Mô tả</strong>
                                                            <p class="mt-0 mb-0">Khóa học Power BI Online sẽbao gồm nhiều chủ đề khác nhau, từ cơ bản đến nâng cao, giúp người học có thể tạo ra các báo cáo và biểu đồ theo cách chuyên nghiệp. Một số chủ đề quan trọng trong khóa học này bao gồm:</p>
                                                        </div>
                                                        <div class="info-item full-width">
                                                            <strong>Tài liệu đính kèm</strong>
                                                            <a href="#">Phụ lục</a>
                                                        </div>
                                                    </div>
                                                </div>
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
    </section>
    @include('sao.objectives.set.popup.popup-create-objectives-company')
</div>
@endsection
@section('js')
    @vite(['resources/js/sao/objectives/set.js'])
    <script src="/plugins/select2/js/select2.full.min.js"></script>
@endsection
