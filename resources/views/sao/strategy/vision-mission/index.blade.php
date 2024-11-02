@php
    $bread_crums = ['Chiến lược' => '', 'Tầm nhìn, sứ mệnh' => '', 'Danh sách' => ''];
@endphp
@extends('layouts.app',[
    'title' => 'Tầm nhìn, sứ mệnh'
])
@section('sidebar')
    @include('sao.sidebar')
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    @vite(['resources/css/sao/strategy/vision-mission.css', 'resources/css/sao/common.css'])
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
            </ul>
        </div>
        <div class="tab-content pt-3">
            <div class="tab-pane show active" id="tab-company">
                <div class="row mb-3">
                    <div class="row col-12 col-sm-12 col-lg-12 col-xl-9" style="margin-right: auto;">
                        <div class="col-xl-3 col-md-3">
                            <select class="form-select" id="">
                                <option value="">--Chọn trạng thái--</option>
                                <option value="">Chưa triển khai</option>
                                <option value="">Đang triển khai</option>
                                <option value="">Hoàn thành</option>

                            </select>
                        </div>
                        <div class="col-xl-2 col-md-2 mb-2">

                        </div>
                        <div class="col-xl-4 col-md-4">

                        </div>
                    </div>
                    <div class="row align-items-center col-12 col-sm-12 col-lg-12 col-xl-3"
                        style="margin-right: 0px;padding-right: 0px;">
                        <div class="d-flex justify-content-end">
                            <div>
                                @can('Xóa màn tầm nhìn sứ mệnh')
                                    <button class="btn btn-sm btn-success mr-2 h-100 text-nowrap" data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                        <i class="bi bi-plus"></i>
                                        <span class="">Thêm mới</span>
                                    </button>
                                @endcan
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div id="data_table_company">
                    <div class="table-detail">
                        <div class="bg-white">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-contract">
                                    <thead class="custom">
                                        <tr>
                                            <th class="text-center">Tiêu đề</th>
                                            <th class="text-center">Thời gian áp dụng</th>
                                            <th class="text-center">Người tạo</th>
                                            <th class="text-center">Thời gian tạo</th>
                                            <th class="text-center">Trạng thái</th>
                                            <th class="text-center">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left align-middle">
                                                <a href="/sao/strategy/vision-mission/detail-company" target="_blank">
                                                    Khát vọng, sứ mệnh, tầm nhìn Tâp đoàn Sconnect 2024-2030
                                                </a>
                                            </td>
                                            <td class="text-center align-middle">
                                                01/01/2024 - 17/01/2024
                                            </td>
                                            <td class="text-left align-middle">
                                                <div class="">Tạ Mạnh Hoàng - SCN0001</div>
                                                <div class="position_e">Tổng Giám đốc Điều hành</div>
                                            </td>
                                            <td class="text-center align-middle">
                                                17/01/2024
                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="align-self-center justify-content-center tab_user">
                                                    <label class="switch m-0">
                                                        <input type="checkbox" class="collapse" checked>
                                                        <span class="slider round "></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                <a  data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                                    <span class="cursor-hand">
                                                        <i class="bi bi-pencil-square ic20 ctx-menu-icon-color"></i>
                                                    </span>
                                                </a>
                                                <span class="cursor-hand text-danger">
                                                    <i class="bi bi-trash ic20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle">
                                                <a href="/sao/strategy/vision-mission/detail-company" target="_blank">
                                                    Khát vọng, sứ mệnh, tầm nhìn Tâp đoàn Sconnect 2024-2030
                                                </a>
                                            </td>
                                            <td class="text-center align-middle">
                                                01/01/2024 - 17/01/2024
                                            </td>
                                            <td class="text-left align-middle">
                                                <div class="">Tạ Mạnh Hoàng - SCN0001</div>
                                                <div class="position_e">Tổng Giám đốc Điều hành</div>
                                            </td>
                                            <td class="text-center align-middle">
                                                17/01/2024
                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="align-self-center justify-content-center tab_user">
                                                    <label class="switch m-0">
                                                        <input type="checkbox" class="collapse" checked>
                                                        <span class="slider round "></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                                    <span class="cursor-hand">
                                                        <i class="bi bi-pencil-square ic20 ctx-menu-icon-color"></i>
                                                    </span>
                                                </a>
                                                <span class="cursor-hand text-danger">
                                                    <i class="bi bi-trash ic20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle">
                                                <a href="/sao/strategy/vision-mission/detail-company" target="_blank">
                                                    Khát vọng, sứ mệnh, tầm nhìn Tâp đoàn Sconnect 2024-2030
                                                </a>
                                            </td>
                                            <td class="text-center align-middle">
                                                01/01/2024 - 17/01/2024
                                            </td>
                                            <td class="text-left align-middle">
                                                <div class="">Tạ Mạnh Hoàng - SCN0001</div>
                                                <div class="position_e">Tổng Giám đốc Điều hành</div>
                                            </td>
                                            <td class="text-center align-middle">
                                                17/01/2024
                                            </td>
                                            <td class="text-center align-middle">
                                                <div class="align-self-center justify-content-center tab_user">
                                                    <label class="switch m-0">
                                                        <input type="checkbox" class="collapse">
                                                        <span class="slider round "></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="text-center align-middle">
                                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                                    <span class="cursor-hand">
                                                        <i class="bi bi-pencil-square ic20 ctx-menu-icon-color"></i>
                                                    </span>
                                                </a>
                                                <span class="cursor-hand text-danger">
                                                    <i class="bi bi-trash ic20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="custom-pagination d-flex justify-content-between align-items-center">
                        <div class="text-count-record">
                            <span>Hiển thị 1 đến 25 của 1157 bản ghi</span>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">46</a></li>
                                <li class="page-item"><a class="page-link" href="#">47</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" rel="next"
                                       aria-label="pagination.next">›</a>
                                </li>
                            </ul>
                        </nav>
                        <div>
                            <label for="">
                                Hiển thị
                                <select name="" id="limit" class="form-control-sm"
                                        style="padding: 0.5rem 0rem !important;">
                                    <option value="25" selected="">25</option>
                                    <option value="50" selected="">50</option>
                                    <option value="75" selected="">75</option>
                                    <option value="100" selected="">100</option>
                                </select>
                                bản ghi
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab-unit">
                <div class="row mb-3">
                    <div class="row col-12 col-sm-12 col-xl-6" style="margin-right: auto;">
                        <div>
                            <span class="head-span">Tầm nhìn, sứ mệnh năm 2025-2030</span>
                        </div>
                    </div>
                    <div class="row align-items-center col-12 col-sm-12 col-xl-6"
                        style="margin-right: 0px;padding-right: 0px;">
                        <div class="d-flex justify-content-end">
                            <div>
                                <select class="form-select target_organization" id="organization-quarter">
                                    <option value="0">Tầm nhìn, sứ mệnh năm 2025-2030</option>
                                    <option value="0">Tầm nhìn, sứ mệnh năm 2030-2035</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="data_table_unit">
                    <div class="table-detail">
                        <div class="bg-white">
                            <div class="table-responsive">
                                <table class="table table-hover table-bordered table-contract">
                                    <thead class="custom">
                                        <tr>
                                            <th class="text-center" width="40%">Đơn vị</th>
                                            <th class="text-center" width="25%">Người tạo</th>
                                            <th class="text-center" width="25%">Thời gian gửi</th>
                                            <th class="text-center" width="20%">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left align-middle">
                                                <a href="/sao/strategy/vision-mission/detail-unit" target="_blank">
                                                    BU Wolfoo
                                                </a>
                                            </td>
                                            <td class="text-left align-middle">
                                                <div class="">Tạ Mạnh Hoàng - SCN0001</div>
                                                <div class="position_e">Tổng Giám đốc Điều hành</div>
                                            </td>
                                            <td class="text-center align-middle">
                                                17/01/2024
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="/sao/strategy/plan/create" target="_blank">
                                                    <span class="cursor-hand">
                                                        <i class="bi bi-pencil-square ic20 ctx-menu-icon-color"></i>
                                                    </span>
                                                </a>
                                                <span class="cursor-hand text-danger">
                                                    <i class="bi bi-trash ic20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle">
                                                <a href="/sao/strategy/vision-mission/detail-unit" target="_blank">
                                                    Ban công nghệ
                                                </a>
                                            </td>
                                            <td class="text-left align-middle">
                                                <div class="">Tạ Mạnh Hoàng - SCN0001</div>
                                                <div class="position_e">Tổng Giám đốc Điều hành</div>
                                            </td>
                                            <td class="text-center align-middle">
                                                17/01/2024
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="/sao/strategy/plan/create" target="_blank">
                                                    <span class="cursor-hand">
                                                        <i class="bi bi-pencil-square ic20 ctx-menu-icon-color"></i>
                                                    </span>
                                                </a>
                                                <span class="cursor-hand text-danger">
                                                    <i class="bi bi-trash ic20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left align-middle">
                                                <a href="/sao/strategy/vision-mission/detail-unit" target="_blank">
                                                    Ban hành chính
                                                </a>
                                            </td>
                                            <td class="text-left align-middle">
                                                <div class="">Tạ Mạnh Hoàng - SCN0001</div>
                                                <div class="position_e">Tổng Giám đốc Điều hành</div>
                                            </td>
                                            <td class="text-center align-middle">
                                                17/01/2024
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="/sao/strategy/plan/create" target="_blank">
                                                    <span class="cursor-hand">
                                                        <i class="bi bi-pencil-square ic20 ctx-menu-icon-color"></i>
                                                    </span>
                                                </a>
                                                <span class="cursor-hand text-danger">
                                                    <i class="bi bi-trash ic20"></i>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="custom-pagination d-flex justify-content-between align-items-center">
                        <div class="text-count-record">
                            <span>Hiển thị 1 đến 25 của 1157 bản ghi</span>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>
                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">46</a></li>
                                <li class="page-item"><a class="page-link" href="#">47</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" rel="next"
                                        aria-label="pagination.next">›</a>
                                </li>
                            </ul>
                        </nav>
                        <div>
                            <label for="">
                                Hiển thị
                                <select name="" id="limit" class="form-control-sm"
                                    style="padding: 0.5rem 0rem !important;">
                                    <option value="25" selected="">25</option>
                                    <option value="50" selected="">50</option>
                                    <option value="75" selected="">75</option>
                                    <option value="100" selected="">100</option>
                                </select>
                                bản ghi
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @include('sao.strategy.vision-mission.popup-new-company') --}}
    @include('sao.strategy.vision-mission.popup-new-unit')
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    @vite(['resources/js/sao/strategy/vision-mission.js'])
@endsection
