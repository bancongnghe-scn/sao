<div class="modal fade" id="addCreateStrategicObjectives" style="overflow:hidden;" role="dialog" aria-labelledby="addCreateStrategy" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document" style="max-width: 90%;">
        <div class="modal-content rounded-0" style="background: #F5F5F5;" id="modal_detail">
            <div class="modal-header" style="color: #2B850B; display: block; border: none; padding: 0;">
                <h4 class="pt-3 pl-3 pr-3 title m-0 font-weight-bold propose-title">Thêm mục tiêu chiến lược</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('mbo.close') }}"></button>
            </div>

            <div class="modal-body">
                <div class="container-fluid p-5" style="background: #fff">
                    <div class="row">
                        <div class="row">
                            <div class="form-group">
                                <label for="name_target_year">Mục tiêu chiến lược<span class="text-danger">*</span></label>
                                <input type="text" class="form-control required" maxlength="250" id="name_target_year" placeholder="Nhập dữ liệu">
                                <span class="error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <label for="">Mô tả</label>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="5" name="" maxlength="500"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-check ml-2">
                                <input type="checkbox" class="form-check-input checkbox-green" id="includeAnalysis" data-bs-toggle="collapse" data-bs-target="#optionsAnalysis" checked>
                                <label class="form-check-label" for="includeAnalysis">Đặt mục tiêu dựa vào bản phân tích kinh doanh</label>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <label class="plan-link">Kế hoạch liên kết:</label>
                            <a href="#" class="text-primary">Kế hoạch chiến lược phát triển tập đoàn Sconnect 2024-2030</a>
                        </div>

                        <div class="col-12 mb-3 collapse show" id="optionsAnalysis">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="loai">Loại</label>
                                    <select id="loai" class="form-control">
                                        <option value="">--Chọn--</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="tieuChi">Tiêu chí</label>
                                    <select id="tieuChi" class="form-control">
                                        <option value="">--Chọn--</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="noiDung">Nội dung</label>
                                    <select id="noiDung" class="form-control">
                                        <option value="">--Chọn--</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="container mt-2">
                            <div class="d-flex align-items-center mb-2">
                                <h5 class="mb-0 font-weight-bold">Mục tiêu chi tiết</h5>
                                <button class="btn ms-2 p-0" id="btn-add-objectives">
                                    <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11 16H21" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16 11V21" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>

                            <div id="list-objectives">
                                <div class="row mb-2 align-items-center parent-item" id="item-1">
                                    <div class="col-md-1 d-flex justify-content-center align-middle">
                                        <div class=" btn-toggle-child d-flex justify-content-center align-items-center">
                                            <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.5 17L6.43782 9.5L18.5622 9.5L12.5 17Z" fill="#101828"/>
                                            </svg>
                                        </div>
                                        <input type="text" class="form-control text-center" value="1" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" value="Thúc đẩy sáng tạo nội bộ, hợp tác cộng đồng sáng tạo" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" placeholder="Nghiên cứu và triển khai Dự án Ngân hàng sáng tạo Sconnect">
                                    </div>
                                    <div class="col-md-3 d-flex">
                                        <select class="form-control select2" multiple>
                                            <option>Công nghệ</option>
                                            <option>HCNS</option>
                                            <option>TCKT</option>
                                            <option>Animate Story</option>
                                        </select>
                                        <button type="button" class="btn removeRow">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 6H21" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5 6V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V6" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M8 6V4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4V6" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M10 12L10 16" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M14 12L14 16" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="col-12 mt-2 child-content">
                                        <div class="child-actions">
                                            <div class="row child-row">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" placeholder="Hành động">
                                                </div>
                                                <div class="col-md-6 d-flex">
                                                    <input type="text" class="form-control" placeholder="Yếu tố xác định hành động">
                                                    <button type="button" class="btn btn-sm btn-remove-child">
                                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 6H21" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M5 6V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V6" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M8 6V4C8 2.89543 8.89543 2 10 2H14C15.1046 2 16 2.89543 16 4V6" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M10 12L10 16" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14 12L14 16" stroke="#F31111" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-12 text-start">
                                                <button class="btn btn-sm btn-add-child">
                                                    <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4C9.37258 4 4 9.37258 4 16C4 22.6274 9.37258 28 16 28Z" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M11 16H21" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M16 11V21" stroke="#379237" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="col-12 mt-0 text-right">
                    <button class="btn btn-sm btn-cancel" data-bs-dismiss="modal">
                        <i class="bi-x-lg"></i>&nbsp;
                        {{ __('Hủy') }}
                    </button>
                    <button class="btn btn-sm btn-success">
                        <i class="bi-check-lg"></i>
                        <span>{{ __('Lưu') }}</span>
                    </button>
                </div>
            </div>
            <div class="side-panel-labels">
                <a href="#" data-bs-dismiss="modal" style="color: #ffffff; padding: 4px;">
                    <i class="bi-x-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>
