@php
    $bread_crums = ['Chiến lược' => '','Tầm nhìn, sứ mệnh' => '','Xem chi tiết' => ''];
@endphp
@extends('layouts.app',[
    'title' => 'Tầm nhìn, sứ mệnh'
])
@section('sidebar')
    @include('sao.sidebar') 
@endsection
@section('css')
    @vite(['resources/css/sao/strategy/vision-mission-unit.css'])
@endsection
@section('content')
    <div class="container-fluid">
        <div class="container-detail-head">
            <div class="row">
                <div>
                    <span class="head-span">Khát vọng, sứ mệnh, tầm nhìn Sconnect 2025-2030 - Ban Công Nghệ</span>
                    <span class="status-title status-title-m">Mới tạo</span>

                    <button class="btn btn-sm btn-success" style="margin-left: 20px">
                        <span>Gửi lên cấp trên</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-9 col-xl-9" style="padding: 20px;">
                    <div class="row">
                        <span style="font-weight: 600;font-size: 18px;">Khát vọng</span>
                    </div>
                    <div class="row" style="padding: 10px;">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Công ty</label>
                                <span class="span-text">Xây dựng Doanh nghiệp tiến bộ, tích cực, hiệu quả nhưng có thể nhân bản chuyển giao được 
                                    1. Mục tiêu 05 năm
                                    2014 - 2019: Hoàn thiện bước đầu về mô hình Doanh nghiệp Sconnect 
                                    2. Mục tiêu 10 năm 
                                    2020 - 2030: Hoàn thiện hệ thống công ty đối tác nhân bản.
                                </span>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Đơn vị</label>
                                <span class="span-text">Xây dựng Doanh nghiệp tiến bộ, tích cực, hiệu quả nhưng có thể nhân bản chuyển giao được 
                                    1. Mục tiêu 05 năm
                                    2014 - 2019: Hoàn thiện bước đầu về mô hình Doanh nghiệp Sconnect 
                                    2. Mục tiêu 10 năm
                                    2020 - 2030: Hoàn thiện hệ thống công ty đối tác nhân bản.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <span style="font-weight: 600;font-size: 18px;">Sứ mệnh</span>
                    </div>
                    <div class="row"  style="padding: 10px;">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Công ty</label>
                                <span class="span-text">Xây dựng Doanh nghiệp tiến bộ, tích cực, hiệu quả nhưng có thể nhân bản chuyển giao được 
                                    1. Mục tiêu 05 năm
                                    2014 - 2019: Hoàn thiện bước đầu về mô hình Doanh nghiệp Sconnect 
                                    2. Mục tiêu 10 năm 
                                    2020 - 2030: Hoàn thiện hệ thống công ty đối tác nhân bản.
                                </span>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Đơn vị</label>
                                <span class="span-text">Xây dựng Doanh nghiệp tiến bộ, tích cực, hiệu quả nhưng có thể nhân bản chuyển giao được 
                                    1. Mục tiêu 05 năm
                                    2014 - 2019: Hoàn thiện bước đầu về mô hình Doanh nghiệp Sconnect 
                                    2. Mục tiêu 10 năm 
                                    2020 - 2030: Hoàn thiện hệ thống công ty đối tác nhân bản.
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <span style="font-weight: 600;font-size: 18px;">Tầm nhìn</span>
                    </div>
                    <div class="row"  style="padding: 10px;">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Công ty</label>
                                <span class="span-text">Xây dựng Doanh nghiệp tiến bộ, tích cực, hiệu quả nhưng có thể nhân bản chuyển giao được 
                                    1. Mục tiêu 05 năm
                                    2014 - 2019: Hoàn thiện bước đầu về mô hình Doanh nghiệp Sconnect 
                                    2. Mục tiêu 10 năm 
                                    2020 - 2030: Hoàn thiện hệ thống công ty đối tác nhân bản.
                                </span>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label>Đơn vị</label>
                                <span class="span-text">Xây dựng Doanh nghiệp tiến bộ, tích cực, hiệu quả nhưng có thể nhân bản chuyển giao được 
                                    1. Mục tiêu 05 năm
                                    2014 - 2019: Hoàn thiện bước đầu về mô hình Doanh nghiệp Sconnect 
                                    2. Mục tiêu 10 năm 
                                    2020 - 2030: Hoàn thiện hệ thống công ty đối tác nhân bản.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 col-xl-3">
                    <div class="row bg-white m-auto w-100">
                        <ul id="ul-tab" class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#comments" class="tab-show active" tab-value="done" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">Bình luận (<span class="totalComment">{{ 1 }}</span>)</a>
                            </li>
                            <li class="nav-item">
                                <a href="#histories" class="tab-show " tab-value="budget" data-bs-toggle="tab" aria-selected="true" role="tab">Lịch sử (<span class="totalHistory">{{ 1 }}</span>)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-8 col-lg-9 col-xl-10 tab-content pt-3">
                        <div class="tab-pane show active" id="comments">
                            <div class="box-column row">
                                <div class="col-12 pt-3 pb-2">
                                    <div class="form-group">
                                        <div class="proposal-comment">
                                            @include('comment.form-create-comment', ['comment_type' => COMMENT_TYPE_STRATEGIC])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="histories">
                            <div id="data_table_send" style="margin-bottom: 20px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
