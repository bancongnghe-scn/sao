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
        <div class="row">
            <div class="row col-12 col-sm-12 col-lg-12 col-xl-9" style="margin-right: auto;">
                <div class="col-xl-12 col-md-12 mb-2 align-middle d-flex justify-content-start">
                    <span class="title-strategy mr-2">Chiến lược phát triển Tập đoàn SC tầm nhìn 2024-2030</span>
                    <div class="d-flex align-self-center justify-content-center ml-2">
                        <span class="status-gray">
                            Mới tạo
                        </span>
                    </div>
                    <div class="d-flex align-self-center justify-content-center ml-2">
                        <button class="btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.75 21V18.8284C2.75 18.4969 2.8817 18.179 3.11611 17.9445L16.5303 4.53033C17.342 3.71865 18.658 3.71865 19.4697 4.53033C20.2813 5.34201 20.2813 6.65799 19.4697 7.46967L6.05546 20.8839C5.82104 21.1183 5.50309 21.25 5.17157 21.25H3C2.86193 21.25 2.75 21.1381 2.75 21Z" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 7L17 9" stroke="#667085" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
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

                        <button class="btn btn-sm btn-warning mr-2 h-100 text-nowrap text-white" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.7119 3.3641L2.24367 8.29104C2.09671 8.33249 1.96591 8.4178 1.86874 8.53558C1.77157 8.65336 1.71266 8.79799 1.69989 8.95015C1.68712 9.1023 1.7211 9.25473 1.79728 9.38706C1.87346 9.51939 1.98821 9.62531 2.1262 9.69068L10.1522 13.4925C10.3088 13.5666 10.4348 13.6927 10.509 13.8492L14.3107 21.8752C14.3761 22.0132 14.482 22.128 14.6144 22.2041C14.7467 22.2803 14.8991 22.3143 15.0513 22.3015C15.2034 22.2888 15.3481 22.2299 15.4658 22.1327C15.5836 22.0355 15.6689 21.9047 15.7104 21.7578L20.6373 4.28953C20.6735 4.16122 20.6749 4.02558 20.6412 3.89658C20.6075 3.76758 20.5401 3.64988 20.4458 3.55561C20.3515 3.46134 20.2339 3.3939 20.1048 3.36024C19.9758 3.32658 19.8402 3.32791 19.7119 3.3641Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.3926 13.6059L14.6352 9.36328" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="">{{ __('Gửi đến các đơn vị') }}</span>
                        </button>

{{--                        <button class="btn btn-sm btn-outline-danger mr-2 h-100 text-nowrap" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">--}}
{{--                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M12 18V22.5" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                <path d="M17.985 14.0931L16.943 3.67536C16.9245 3.49029 16.8379 3.3187 16.7 3.1939C16.5621 3.06911 16.3827 3 16.1968 3H7.87305" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                <path d="M6.797 6.27734L6.05239 13.7218C6.04238 13.831 6.00851 13.9368 5.95317 14.0315C5.89782 14.1262 5.82235 14.2077 5.73209 14.2701C4.75787 14.9278 4.07941 15.9403 3.84161 17.0914C3.81837 17.2009 3.81982 17.3141 3.84586 17.4229C3.8719 17.5317 3.92187 17.6334 3.99213 17.7204C4.06239 17.8075 4.15118 17.8778 4.25203 17.9262C4.35289 17.9747 4.46327 18 4.57514 18.0004H17.4543" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                                <path d="M3.14062 2.25L20.8594 21.75" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>--}}
{{--                            </svg>--}}
{{--                            <span class="">{{ __('Dừng áp dụng') }}</span>--}}
{{--                        </button>--}}

{{--                        <button class="btn btn-sm btn-success mr-2 h-100 text-nowrap text-white" data-bs-target="#addCreateStrategicObjectives" data-bs-toggle="modal">--}}
{{--                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                <path d="M21.813 8.79342L15.213 2.19342C15.0389 2.01931 14.8112 1.93359 14.5835 1.93359C14.3558 1.93359 14.1282 2.01931 13.9541 2.19342L9.63888 6.51127C9.31209 6.47377 8.98263 6.4577 8.65316 6.4577C6.69245 6.4577 4.73174 7.10324 3.12191 8.39431C3.02443 8.47258 2.94453 8.57052 2.88742 8.68173C2.8303 8.79294 2.79726 8.91494 2.79044 9.03977C2.78361 9.16461 2.80316 9.28948 2.84782 9.40626C2.89247 9.52303 2.96122 9.62909 3.04959 9.71752L7.91656 14.5845L2.14692 20.3488C2.07621 20.419 2.03258 20.512 2.0237 20.6113L1.93263 21.6077C1.90852 21.8595 2.10941 22.0738 2.35852 22.0738C2.37191 22.0738 2.38531 22.0738 2.3987 22.0711L3.39513 21.98C3.49424 21.972 3.58799 21.9265 3.65763 21.8568L9.42727 16.0872L14.2942 20.9541C14.4683 21.1282 14.696 21.214 14.9237 21.214C15.1835 21.214 15.4407 21.1015 15.6175 20.8818C17.1255 18.9988 17.7523 16.6416 17.4978 14.3622L21.813 10.047C22.1585 9.70413 22.1585 9.14163 21.813 8.79342ZM16.1317 13.0041L15.4755 13.6604L15.5773 14.5818C15.7369 16.007 15.4525 17.4467 14.763 18.7041L5.30495 9.24074C5.65049 9.05056 6.00941 8.88984 6.38441 8.76127C7.11299 8.50949 7.87638 8.38359 8.65316 8.38359C8.91031 8.38359 9.17013 8.39699 9.42727 8.42645L10.3487 8.52824L11.005 7.87199L14.5862 4.29074L19.7157 9.4202L16.1317 13.0041Z" fill="white"/>--}}
{{--                            </svg>--}}
{{--                            <span class="">{{ __('Đưa vào áp dụng') }}</span>--}}
{{--                        </button>--}}
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
                                                    <div class="notification-wrapper">
                                                        <div class="vertical-line"></div>
                                                        <span class="dot dot-purple"></span>
                                                        <div class="notification-card">
                                                            <div class="notification-content">
                                                                <div class="notification-time">15h30 - 01/02/2023</div>
                                                                <div><strong>Nguyễn Tiến Dũng _ SCN1352</strong> đã điều chỉnh chiến lược</div>
                                                            </div>
                                                            <i class="fas fa-eye notification-eye"></i>
                                                        </div>
                                                    </div>

                                                    <div class="notification-wrapper">
                                                        <div class="vertical-line"></div>
                                                        <span class="dot dot-blue"></span>
                                                        <div class="notification-card">
                                                            <div class="notification-content">
                                                                <div class="notification-time">15h30 - 01/02/2023</div>
                                                                <div><strong>Nguyễn Tiến Dũng _ SCN1352</strong> đã điều chỉnh mục tiêu</div>
                                                            </div>
                                                            <i class="fas fa-eye notification-eye"></i>
                                                        </div>
                                                    </div>

                                                    <div class="notification-wrapper">
                                                        <div class="vertical-line"></div>
                                                        <span class="dot dot-yellow"></span>
                                                        <div class="notification-card">
                                                            <div class="notification-content">
                                                                <div class="notification-time">15h30 - 01/02/2023</div>
                                                                <div><strong>Nguyễn Tiến Dũng _ SCN1352</strong> đã điều chỉnh mục tiêu</div>
                                                            </div>
                                                            <i class="fas fa-eye notification-eye"></i>
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
