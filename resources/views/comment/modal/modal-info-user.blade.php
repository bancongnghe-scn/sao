<div class="modal fade pr-0 right-modal" id="right-modal-info-user" style="overflow:hidden;" role="dialog"
    aria-labelledby="right-modal-info-userLabel" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-slideout" role="document" style="max-width: 40%">
        <div class="modal-content" style="background-color: #efefef">
            <div class="modal-header">
                <div class="font-weight-bold text-success h3 mb-0">Chi tiết nhân sự
                </div>
            </div>
            <div class="modal-body d-flex justify-content-between">
                <div class="card w-100">
                    <div class="card-body d-flex justify-content-between">
                        <div class="avatar">
                            <div class="img-detail text-center">
                                <img src="{{ asset('images/avatar-default.png') }}" alt="" id="info-avatar-user">
                            </div>
                        </div>
                        <div class="info-personal">
                            <div class="info-contract-text border-bottom" style="height: 30px">
                                <span class="h5">Thông tin liên hệ</span>
                            </div>
                            <div class="item-group">
                                <span class="title">Mã nhân viên</span><br>
                                <span class="data" data-value="code" id="info-code"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Họ tên</span><br>
                                <span class="data" data-value="full_name" id="info-full-name"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Email liên hệ</span><br>
                                <span class="data" data-value="email" id="info-email"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Phòng ban</span><br>
                                <span class="department" id="info-department"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Chức vụ</span><br>
                                <span class="position" id="info-position"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Ngày sinh</span><br>
                                <span class="date_of_birth" id="info-date-of-birth"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-end">
                    <button type="button" class="btn btn-sm btn-danger close-modal"
                        data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
            <div class="side-panel-labels">
                <a href="#" data-bs-dismiss="modal" style="color: #ffffff; padding: 4px;" class="close-modal"> <i
                        class="bi-x-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>
