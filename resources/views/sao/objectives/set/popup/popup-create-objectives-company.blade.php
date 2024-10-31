<div class="modal fade" id="addCreateObjectivesCompany" style="overflow:hidden;" role="dialog" aria-labelledby="addCreateObjectivesCompany" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document" style="max-width: 60%;">
        <div class="modal-content rounded-0" style="background: #F5F5F5;" id="modal_detail">
            <div class="modal-header" style="color: #2B850B; display: block; border: none; padding: 0;">
                <h4 class="pt-3 pl-3 pr-3 title m-0 font-weight-bold propose-title">Thêm mới mục tiêu công ty</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('mbo.close') }}"></button>
            </div>

            <div class="modal-body">
                <div class="container" style="background: #fff">
                    <div class="row">
                        <div class="row">
                            <div class="col-xl-10 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Mục tiêu
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>Tăng hiệu quả sự dụng vốn (ROI)</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Tính chất
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>Định lượng</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Tính chất
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control required" placeholder="Bộ mục tiêu + đơn vị + năm áp dụng" maxlength="250" id="name_target_year">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Chỉ số kế hoạch
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control required" placeholder="%" max="100" id="name_target_year">

                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Cách tính
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control required" placeholder="Kết quả/Kế hoạch" maxlength="250" id="name_target_year">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Trong số
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="number" class="form-control required" placeholder="%" max="100" id="name_target_year">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Mức độ ưu tiên
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>-- Chọn --</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Chu kỳ cập nhập (Đơn vị)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>-- Chọn --</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Chu kỳ đánh giá (Ban TGĐ)
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>-- Chọn --</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Liên kết với mục tiêu chiến lược
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>Thúc đẩy sáng tạo nội bộ, hợp tác cộng đồng sáng tạo</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <span>Mô tả</span>
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="10" name="" maxlength="500"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="col-12 mt-0 text-right">
                    <button class="btn btn-sm btn-cancel" data-bs-dismiss="modal">
                        <i class="bi-x-lg"></i>&nbsp;{{ __('Hủy') }}
                    </button>
                    <button class="btn btn-sm btn-success">
                        <i class="bi-check-lg"></i>
                        <span>{{ __('Lưu') }}</span>
                    </button>
                    <button class="btn btn-sm btn-warning text-white">
                        <i class="bi-check-lg"></i>
                        <span>{{ __('Lưu & phân bố') }}</span>
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
