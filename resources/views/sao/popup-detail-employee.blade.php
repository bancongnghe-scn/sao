<style>
    #detail-employee-modal-2 .img-detail img {
        width: 80%;
        border-radius: 50%;
    }

    #detail-employee-modal-2 .item-group {
        padding: 10px 0px;
    }

    #detail-employee-modal-2 .title {
        color: #a3a9b1;
    }

    #detail-employee-modal-2 .info-personal {
        width: 60%;
    }

    #detail-employee-modal-2 .avatar {
        width: 35%;
    }
</style>
<div class="modal fade pr-0 right-modal" id="detail-employee-modal-2" style="overflow:hidden;" role="dialog"
    aria-labelledby="rightModalLabel" aria-hidden="true" tabindex="-1">
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
                                <img src="{{ asset('images/avatar-default.png') }}" alt=""
                                    id="info-employee-avatar">
                            </div>
                        </div>
                        <div class="info-personal">
                            <div class="info-contract-text border-bottom" style="height: 30px">
                                <span class="h5">Thông tin liên hệ</span>
                            </div>
                            <div class="item-group">
                                <span class="title">Mã nhân viên</span><br>
                                <span id="info-employee-code"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Họ tên</span><br>
                                <span id="info-employee-name"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Email liên hệ</span><br>
                                <span id="info-employee-email"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Phòng ban</span><br>
                                <span id="info-employee-department"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Chức vụ</span><br>
                                <span id="info-employee-position"></span>
                            </div>
                            <div class="item-group">
                                <span class="title">Ngày sinh</span><br>
                                <span id="info-employee-birth"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-end">
                    <button type="button" class="btn btn-sm btn-danger close-modal-detail"
                        id="close-modal-employee-2">Đóng</button>
                </div>
            </div>
            <div class="side-panel-labels">
                <a href="#" style="color: #ffffff; padding: 4px;" id="close-modal-employee">
                    <i class="bi-x-lg"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<script>
    $("#close-modal-employee-2").click(function() {
        $("#detail-employee-modal-2").modal('hide');
        clearInfoEmployee();
    });
    $("#close-modal-employee").click(function() {
        $("#detail-employee-modal-2").modal('hide');
        clearInfoEmployee();
    });

    function clearInfoEmployee() {
        $("#info-employee-code").html('');
        $("#info-employee-name").html('');
        $("#info-employee-email").html('');
        $("#info-employee-department").html('');
        $("#info-employee-position").html('');
        $("#info-employee-birth").html('');
    }

    function getInfoEmployee(userId) {
        $.ajax({
            type: "GET",
            url: '{{ route('hrm.employee.get-data-employye-detail') }}',
            data: {
                userId: userId,
            },
            success: function(data) {
                if (data.status) {
                    $("#info-employee-code").html(data.employee.code);
                    $("#info-employee-name").html(data.employee.name);
                    $("#info-employee-email").html(data.employee.email);
                    $("#info-employee-department").html(data.employee.dep_name);
                    $("#info-employee-position").html(data.employee.job_position);
                    $("#info-employee-birth").html(data.employee.date_of_birth ?
                        moment(data.employee.date_of_birth).format('DD/MM/YYYY') : '');
                    $("#info-employee-avatar").attr("src", data.employee.avatar ? data.employee.avatar : $(
                        ".avatar-default-global").val())
                }
            },
            error: function(data) {}
        });
    }
</script>