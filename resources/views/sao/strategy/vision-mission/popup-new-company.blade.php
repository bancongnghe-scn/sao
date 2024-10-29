<div class="modal fade" id="addVisionMissionCompany" style="overflow:hidden;" role="dialog"
    aria-labelledby="addVisionMissionCompany" tabindex="-1" aria-hidden="true">
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
                                    <label>Tiêu đề
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control required" maxlength="250"
                                        id="name_target_year">
                                    <span class="error"></span>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <label>Thời gian áp dụng<span class="text-danger">*</span></label>
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
                            <span>Tài liệu đính kèm </span>
                            <input type="file" name="file" class="validate-file">
                            {{-- <span style="color: #9e9e9e;">Hỗ trợ file pdf, doc, docx, xls, xlsx, ppt, pptx, zip, 7zip, rar</span><br> --}}
                        </div>

                        <div class="row">
                            <span style="font-weight: 600;font-size: 18px;">Khát vọng</span>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="20" name="" maxlength="500"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <span style="font-weight: 600;font-size: 18px;">Sứ mệnh</span>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="20" name="" maxlength="500"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <span style="font-weight: 600;font-size: 18px;">Tầm nhìn</span>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <textarea class="form-control common-summer-note item" rows="20" name="" maxlength="500"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="col-12 mt-0 text-right">
                    <button class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi-x-lg"></i>&nbsp;{{ __('mbo.close') }}
                    </button>
                    <button class="btn btn-sm btn-success">
                        <i class="bi-check-lg"></i>
                        <span>{{ __('mbo.add_new') }}</span>
                    </button>
                </div>
            </div>
            <div class="side-panel-labels">
                <a href="#" data-bs-dismiss="modal" style="color: #ffffff; padding: 4px;"> <i
                        class="bi-x-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>