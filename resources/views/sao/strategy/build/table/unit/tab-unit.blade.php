
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
                            <th class="text-center">STT</th>
                            <th class="text-center">Tên chiến lược</th>
                            <th class="text-center">Liên kết với chiến lược công ty</th>
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
                                1
                            </td>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật 2025-2030
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-secondary" href="/sao/strategy/build/detail-unit" target="_blank">
                                    Xem chi tiết
                                </a>
                                <p class="text-secondary">Đơn vị đang thiết lập</p>
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.75 21V18.8284C2.75 18.4969 2.8817 18.179 3.11611 17.9445L16.5303 4.53033C17.342 3.71865 18.658 3.71865 19.4697 4.53033C20.2813 5.34201 20.2813 6.65799 19.4697 7.46967L6.05546 20.8839C5.82104 21.1183 5.50309 21.25 5.17157 21.25H3C2.86193 21.25 2.75 21.1381 2.75 21Z" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 7L17 9" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H21" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 6V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8 6V4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12L10 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 12L14 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-middle">
                                2
                            </td>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật năm 2025
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-secondary" href="/sao/strategy/build/detail-unit" target="_blank">
                                    Xem chi tiết
                                </a>
                                <p class="text-secondary">Đơn vị đang thiết lập</p>
                            </td>
                            <td class="text-left align-middle">
                                2024-2026
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
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.0002 3.33203V16.6654M3.3335 9.9987H16.6668" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.75 21V18.8284C2.75 18.4969 2.8817 18.179 3.11611 17.9445L16.5303 4.53033C17.342 3.71865 18.658 3.71865 19.4697 4.53033C20.2813 5.34201 20.2813 6.65799 19.4697 7.46967L6.05546 20.8839C5.82104 21.1183 5.50309 21.25 5.17157 21.25H3C2.86193 21.25 2.75 21.1381 2.75 21Z" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 7L17 9" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H21" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 6V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8 6V4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12L10 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 12L14 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-middle">
                                3
                            </td>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật năm 2025
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-secondary" href="/sao/strategy/build/detail-unit" target="_blank">
                                    Xem chi tiết
                                </a>
                                <p class="text-secondary">Đơn vị đang thiết lập</p>
                            </td>
                            <td class="text-left align-middle">
                                2024-2026
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
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.7109 3.3641L2.24269 8.29104C2.09574 8.33249 1.96493 8.4178 1.86776 8.53558C1.77059 8.65336 1.71169 8.79799 1.69892 8.95015C1.68615 9.1023 1.72012 9.25473 1.7963 9.38706C1.87248 9.51939 1.98723 9.62531 2.12523 9.69068L10.1512 13.4925C10.3078 13.5666 10.4338 13.6927 10.508 13.8492L14.3098 21.8752C14.3751 22.0132 14.4811 22.128 14.6134 22.2041C14.7457 22.2803 14.8981 22.3143 15.0503 22.3015C15.2025 22.2888 15.3471 22.2299 15.4649 22.1327C15.5826 22.0355 15.668 21.9047 15.7094 21.7578L20.6363 4.28953C20.6725 4.16122 20.6739 4.02558 20.6402 3.89658C20.6066 3.76758 20.5391 3.64988 20.4448 3.55561C20.3506 3.46134 20.2329 3.3939 20.1039 3.36024C19.9749 3.32658 19.8392 3.32791 19.7109 3.3641Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.3936 13.6059L14.6362 9.36328" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.75 21V18.8284C2.75 18.4969 2.8817 18.179 3.11611 17.9445L16.5303 4.53033C17.342 3.71865 18.658 3.71865 19.4697 4.53033C20.2813 5.34201 20.2813 6.65799 19.4697 7.46967L6.05546 20.8839C5.82104 21.1183 5.50309 21.25 5.17157 21.25H3C2.86193 21.25 2.75 21.1381 2.75 21Z" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 7L17 9" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H21" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 6V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8 6V4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12L10 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 12L14 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-middle">
                                4
                            </td>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật năm 2025
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-secondary" href="/sao/strategy/build/detail-unit" target="_blank">
                                    Xem chi tiết
                                </a>
                                <p class="text-secondary">Đơn vị đang thiết lập</p>
                            </td>
                            <td class="text-left align-middle">
                                2024-2026
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
                                    <span class="status-red">
                                        Từ chối
                                    </span>
                                </div>
                            </td>
                            <td class="text-center align-middle">
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.7109 3.3641L2.24269 8.29104C2.09574 8.33249 1.96493 8.4178 1.86776 8.53558C1.77059 8.65336 1.71169 8.79799 1.69892 8.95015C1.68615 9.1023 1.72012 9.25473 1.7963 9.38706C1.87248 9.51939 1.98723 9.62531 2.12523 9.69068L10.1512 13.4925C10.3078 13.5666 10.4338 13.6927 10.508 13.8492L14.3098 21.8752C14.3751 22.0132 14.4811 22.128 14.6134 22.2041C14.7457 22.2803 14.8981 22.3143 15.0503 22.3015C15.2025 22.2888 15.3471 22.2299 15.4649 22.1327C15.5826 22.0355 15.668 21.9047 15.7094 21.7578L20.6363 4.28953C20.6725 4.16122 20.6739 4.02558 20.6402 3.89658C20.6066 3.76758 20.5391 3.64988 20.4448 3.55561C20.3506 3.46134 20.2329 3.3939 20.1039 3.36024C19.9749 3.32658 19.8392 3.32791 19.7109 3.3641Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.3936 13.6059L14.6362 9.36328" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.75 21V18.8284C2.75 18.4969 2.8817 18.179 3.11611 17.9445L16.5303 4.53033C17.342 3.71865 18.658 3.71865 19.4697 4.53033C20.2813 5.34201 20.2813 6.65799 19.4697 7.46967L6.05546 20.8839C5.82104 21.1183 5.50309 21.25 5.17157 21.25H3C2.86193 21.25 2.75 21.1381 2.75 21Z" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15 7L17 9" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6H21" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 6V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M8 6V4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4V6" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 12L10 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14 12L14 16" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-middle">
                                5
                            </td>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật năm 2025
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-secondary" href="/sao/strategy/build/detail-unit" target="_blank">
                                    Xem chi tiết
                                </a>
                                <p class="text-primary">Đang áp dụng</p>
                            </td>
                            <td class="text-left align-middle">
                                2024-2026
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
                                    <span class="status-green">
                                        Đã duyệt
                                    </span>
                                </div>
                            </td>
                            <td class="text-center align-middle">
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="157" height="70" viewBox="0 0 157 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_2201_58950" fill="white">
                                            <path d="M0 0H158V70H0V0Z"/>
                                        </mask>
                                        <path d="M87.6425 34.48C85.7381 30.4682 82.8593 28.4492 79.0001 28.4492C75.139 28.4492 72.2622 30.4682 70.3577 34.482C70.2813 34.6438 70.2417 34.8204 70.2417 34.9993C70.2417 35.1782 70.2813 35.3549 70.3577 35.5166C72.2622 39.5285 75.141 41.5474 79.0001 41.5474C82.8613 41.5474 85.7381 39.5285 87.6425 35.5146C87.7972 35.1892 87.7972 34.8115 87.6425 34.48ZM79.0001 40.101C75.7597 40.101 73.3872 38.4577 71.7137 34.9983C73.3872 31.539 75.7597 29.8956 79.0001 29.8956C82.2405 29.8956 84.6131 31.539 86.2865 34.9983C84.6151 38.4577 82.2425 40.101 79.0001 40.101ZM78.9198 31.4626C76.9671 31.4626 75.384 33.0456 75.384 34.9983C75.384 36.951 76.9671 38.534 78.9198 38.534C80.8724 38.534 82.4555 36.951 82.4555 34.9983C82.4555 33.0456 80.8724 31.4626 78.9198 31.4626ZM78.9198 37.2483C77.6762 37.2483 76.6698 36.2419 76.6698 34.9983C76.6698 33.7548 77.6762 32.7483 78.9198 32.7483C80.1633 32.7483 81.1698 33.7548 81.1698 34.9983C81.1698 36.2419 80.1633 37.2483 78.9198 37.2483Z" fill="#101828"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left align-middle">
                                6
                            </td>
                            <td class="text-left align-middle">
                                <a href="/sao/strategy/build/detail-company" target="_blank">
                                    Chiến lược BU cấp quyền nhân vật năm 2025
                                </a>
                            </td>
                            <td class="text-center align-middle">
                                <a class="btn btn-outline-secondary" href="/sao/strategy/build/detail-unit" target="_blank">
                                    Xem chi tiết
                                </a>
                                <p class="text-danger">Dừng áp dụng</p>
                            </td>
                            <td class="text-left align-middle">
                                2024-2026
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
                                    <span class="status-green">
                                        Đã duyệt
                                    </span>
                                </div>
                            </td>
                            <td class="text-center align-middle">
                                <a data-bs-target="#addVisionMissionCompany" data-bs-toggle="modal">
                                    <svg width="157" height="70" viewBox="0 0 157 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="path-1-inside-1_2201_58950" fill="white">
                                            <path d="M0 0H158V70H0V0Z"/>
                                        </mask>
                                        <path d="M87.6425 34.48C85.7381 30.4682 82.8593 28.4492 79.0001 28.4492C75.139 28.4492 72.2622 30.4682 70.3577 34.482C70.2813 34.6438 70.2417 34.8204 70.2417 34.9993C70.2417 35.1782 70.2813 35.3549 70.3577 35.5166C72.2622 39.5285 75.141 41.5474 79.0001 41.5474C82.8613 41.5474 85.7381 39.5285 87.6425 35.5146C87.7972 35.1892 87.7972 34.8115 87.6425 34.48ZM79.0001 40.101C75.7597 40.101 73.3872 38.4577 71.7137 34.9983C73.3872 31.539 75.7597 29.8956 79.0001 29.8956C82.2405 29.8956 84.6131 31.539 86.2865 34.9983C84.6151 38.4577 82.2425 40.101 79.0001 40.101ZM78.9198 31.4626C76.9671 31.4626 75.384 33.0456 75.384 34.9983C75.384 36.951 76.9671 38.534 78.9198 38.534C80.8724 38.534 82.4555 36.951 82.4555 34.9983C82.4555 33.0456 80.8724 31.4626 78.9198 31.4626ZM78.9198 37.2483C77.6762 37.2483 76.6698 36.2419 76.6698 34.9983C76.6698 33.7548 77.6762 32.7483 78.9198 32.7483C80.1633 32.7483 81.1698 33.7548 81.1698 34.9983C81.1698 36.2419 80.1633 37.2483 78.9198 37.2483Z" fill="#101828"/>
                                    </svg>

                                </a>
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
