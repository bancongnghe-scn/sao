<div class="modal fade" id="addCreateStrategy" style="overflow:hidden;" role="dialog"
    aria-labelledby="addCreateStrategy" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document" style="max-width: 60%;">
        <div class="modal-content rounded-0" style="background: #F5F5F5;" id="modal_detail">
            <div class="modal-header" style="color: #2B850B; display: block; border: none; padding: 0;">
                <h4 class="pt-3 pl-3 pr-3 title m-0 font-weight-bold propose-title">Thêm mới</h4>
                <button type="button" class="close" data-bs-dismiss="modal"
                    aria-label="{{ __('mbo.close') }}"></button>
            </div>

            <div class="modal-body">
                <div class="container" style="background: #fff">
                    <div class="row">
                        <div class="row">
                            <span style="font-weight: 600;font-size: 18px;">Thông tin chung</span>
                        </div>
                        <div class="row">
                            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Tên chiến lược
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control required" maxlength="250"
                                        id="name_target_year">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Năm áp dụng<span class="text-danger">*</span></label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control common-date" name=""
                                            id="" placeholder="dd/mm/yyyy" value="" />
                                        <label class="bi bi-calendar-fill input-group-addon"></label>
                                    </div>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <span>Kế hoạch liên kết <span class="text-danger">*</span></span>
                            <select class="form-control">
                                <option>Kế hoạch chiến lược 2024-2025</option>
                            </select>
                        </div>
                        <div class="row">
                            <span>Mô tả</span>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="20" name="" maxlength="500"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label>Tài liệu đính kèm</label>
                            <div class="file-upload-container">
                                <label for="file-upload" class="custom-file-upload">
                                    <div class="upload-box">
                                        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 14L11 10M11 10L15 14M11 10V19M19 14.7428C20.2215 13.734 21 12.2079 21 10.5C21 7.46243 18.5376 5 15.5 5C15.2815 5 15.0771 4.886 14.9661 4.69774C13.6621 2.48484 11.2544 1 8.5 1C4.35786 1 1 4.35786 1 8.5C1 10.5661 1.83545 12.4371 3.18695 13.7935" stroke="#344054" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span>Chọn file</span>
                                        <p>Tối đa 15MB</p>
                                    </div>
                                </label>
                                <input id="file-upload" type="file" class="validate-file" name="file" multiple/>
                                <span class="file-support">Hỗ trợ file pdf, doc, docx, xls, xlsx, ppt, pptx, zip, 7zip, rar</span>
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
                    <button class="btn btn-sm btn-success">
                        <i class="bi-check-lg"></i>
                        <span>{{ __('Lưu & thiết lập mục tiêu') }}</span>
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
