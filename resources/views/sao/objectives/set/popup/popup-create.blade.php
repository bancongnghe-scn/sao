<div class="modal fade" id="addCreateStrategy" style="overflow:hidden;" role="dialog" aria-labelledby="addCreateStrategy" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document" style="max-width: 60%;">
        <div class="modal-content rounded-0" style="background: #F5F5F5;" id="modal_detail">
            <div class="modal-header" style="color: #2B850B; display: block; border: none; padding: 0;">
                <h4 class="pt-3 pl-3 pr-3 title m-0 font-weight-bold propose-title">Thêm mới bộ mục tiêu</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="{{ __('mbo.close') }}"></button>
            </div>

            <div class="modal-body">
                <div class="container" style="background: #fff">
                    <div class="row">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Chiến lược liên kết
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>Chiến lược SC 2024-2030</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Tên bộ mục tiêu
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control required" placeholder="Bộ mục tiêu + đơn vị + năm áp dụng" maxlength="250" id="name_target_year">
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Người phụ trách
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>Tạ Mạnh Hoàng - SCN0001</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        Năm áp dụng
                                        <span class="text-danger">*</span>
                                    </label>
                                    <select class="form-control">
                                        <option>-- 2024 --</option>
                                    </select>
                                    <span class="error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>
                                        <span class="font-weight-bold">
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
                            </div>
                        </div>


                        <div class="row">
                            <span>Mô tả</span>
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="10" name="" maxlength="500"></textarea>
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
