
<div class="tab-pane " id="tab-unit">
    <div class="row mb-3">
        <div class="row col-12 col-sm-12 col-lg-12 col-xl-9" style="margin-right: auto;">
            <div class="col-xl-2 col-md-2 mb-2">
                <select class="form-select" id="">
                    <option value="">--Chọn trạng thái--</option>
                    <option value="">Chưa triển khai</option>
                    <option value="">Đang triển khai</option>
                    <option value="">Hoàn thành</option>

                </select>
            </div>
            <div class="col-xl-2 col-md-2 mb-2">
                <select class="form-select" id="">
                    <option value="">--Chọn năm--</option>
                    <option value="">--2024--</option>
                    <option value="">--2025--</option>
                    <option value="">--2026--</option>
                </select>
            </div>
            <div class="col-xl-2 col-md-2">
                <input class="form-control" placeholder="Tên chiến lược">
            </div>
        </div>
        <div class="row align-items-center col-12 col-sm-12 col-lg-12 col-xl-3 mr-0 pr-0">
            <div class="d-flex justify-content-end">
                <div>
                    <button class="btn btn-sm btn-success mr-2 h-100 text-nowrap" data-bs-target="#addCreateStrategy" data-bs-toggle="modal">
                        <i class="bi bi-plus"></i>
                        <span class="">{{ __('mbo.add_new') }}</span>
                    </button>
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
                            <th class="text-center">Tên chiến lược</th>
                            <th class="text-center">Năm áp dụng</th>
                            <th class="text-center">Thời gian tạo</th>
                            <th class="text-center">Người tạo</th>
                            <th class="text-center">Trạng thái</th>
                            <th class="text-center">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật 2025-2030
                                </a>
                            </td>
                            <td class="text-left align-middle">
                                2025-2030
                            </td>

                            <td class="text-left align-middle">
                                12/01/2023
                            </td>
                            <td class="text-left align-middle">
                                <div class="font-weight-bold">Nguyễn Đức Thắng - SCN0342</div>
                                <div class="text-gray">Tổng Giám đốc Điều hành</div>
                            </td>
                            <td class="text-center align-middle">
                                <div class="align-self-center justify-content-center tab_user">
                                    <span class="status-blue">
                                        Chờ duyệt
                                    </span>
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
                                <a href="/sao/strategy/build/detail-unit" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật năm 2025
                                </a>
                            </td>
                            <td class="text-left align-middle">
                                2025-2030
                            </td>

                            <td class="text-left align-middle">
                                12/01/2023
                            </td>
                            <td class="text-left align-middle">
                                <div class="font-weight-bold">Nguyễn Đức Thắng - SCN0342</div>
                                <div class="text-gray">Tổng Giám đốc Điều hành</div>
                            </td>
                            <td class="text-center align-middle">
                                <div class="align-self-center justify-content-center tab_user">
                                    <span class="status-gray">
                                        Mới tạo
                                    </span>
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
                                <a href="/sao/strategy/build/build/detail-unit" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật 2025-2030
                                </a>
                            </td>
                            <td class="text-left align-middle">
                                2025-2030
                            </td>

                            <td class="text-left align-middle">
                                12/01/2023
                            </td>
                            <td class="text-left align-middle">
                                <div class="font-weight-bold">Nguyễn Đức Thắng - SCN0342</div>
                                <div class="text-gray">Tổng Giám đốc Điều hành</div>
                            </td>
                            <td class="text-center align-middle">
                                <div class="align-self-center justify-content-center tab_user">
                                    <span class="status-violet">
                                        Đang thiết lập
                                    </span>
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
                                <a href="/sao/strategy/build/detail-unit" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật 2025-2030
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                2025-2030
                            </td>

                            <td class="text-center align-middle">
                                12/01/2023
                            </td>
                            <td class="text-left align-middle">
                                <div class="font-weight-bold">Nguyễn Đức Thắng - SCN0342</div>
                                <div class="text-gray">Tổng Giám đốc Điều hành</div>
                            </td>
                            <td class="text-center align-middle">
                                <div class="align-self-center justify-content-center tab_user">
                                    <span class="status-red">
                                        Từ chối
                                    </span>
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