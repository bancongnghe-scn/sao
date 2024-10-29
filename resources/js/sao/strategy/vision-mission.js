/**
 * ****************************************************************************
 *
 * Create Time	:	2024/09/05
 * Create User	:	vietdt – vietdt@s-connect.net
 *
 * @package		:	MODULE Strategy And Objectives
 * ****************************************************************************
 */
const lines = [];

$(function () {
    initEvents();
    initialize();
});
/**
 * initialize
 *
 * @author    : vietdt
 * @return    : null
 * @access    : public
 * @see       : init
 */
function initialize() {
    $(".input-group.date").datepicker({
        container: "body",
        format: "dd/mm/yyyy",
        changeMonth: true,
        changeYear: true,
        showOn: "focus",
        showButtonPanel: true,
        clearBtn: true,
        language: "vi",
        orientation: "auto",
        autoclose: true,
        todayHighlight: true,
    });
    $('.wp-table').on('click', function() {
        $(this).toggleClass('hierarchy-open-icon hierarchy-close-icon');
        // var target_id = $(this).attr('target_id');
        //
        if ($(this).hasClass('hierarchy-open-icon')) {
            $('.tr-data').each(function() {
                // if ($(this).attr('parent_id') == target_id) {
                //     $(this).removeClass('hidden');
                // }
            });
        } else if ($(this).hasClass('hierarchy-close-icon')) {
            $('.tr-data').each(function() {
                // if ($(this).attr('parent_id') == target_id) {
                //     $(this).addClass('hidden');
                // }
            });
        }
    });

    $('.btn-table').on('click', function() {
        $(this).addClass('active');
        $('.btn-diagram').removeClass('active');

        $('.table-detail').removeClass('hidden');
        $('.diagram-detail').addClass('hidden');
    });

    $('.btn-diagram').on('click', function() {
        $(this).addClass('active');
        $('.btn-table').removeClass('active');

        $('.table-detail').addClass('hidden');
        $('.diagram-detail').removeClass('hidden');
    });
    // Tạo một tooltip element và thêm vào body
    const tooltip = $('<div class="tooltip"><div class="tooltip-content"><img src="/uploads/1718163695anh-den-ngau.jpeg" alt="Avatar" class="avatar"><h4>Nguyễn Văn A</h4><p>Chuyên viên Tổ chức sự kiện</p><p><strong>Departments:</strong> Nhóm Phát triển văn hóa</p><p><strong>Subordinate To:</strong> Nguyễn B</p><p><strong>E-mail:</strong> a@s-connect.net</p></div></div>');
    $('body').append(tooltip);
    tooltip.hide();
    var timer;
    // Sự kiện hover cho các ảnh có class image-plan
    $('.image-plan,.user-image').hover(function(event) {
        // Lấy dữ liệu từ thuộc tính data
        // const name = $(this).data('name');
        // const dob = $(this).data('dob');
        // tooltip.html(`Name: ${name}<br>Born: ${dob}`);
        clearTimeout(timer); // Hủy hẹn giờ nếu có

        tooltip.fadeIn(200); // Hiển thị tooltip
        // tooltip.show(); // Hiển thị tooltip

        // Định vị tooltip theo vị trí con trỏ chuột
        tooltip.css({
            left: event.pageX + 100 + 'px',
            top: event.pageY - 10 + 'px'
        });

    }, function() {
        // Ẩn tooltip khi rời chuột
        // tooltip.hide();

        timer = setTimeout(function() {
            tooltip.fadeOut(200);
        }, 100);
    });

    // Khi hover vào tooltip, giữ tooltip hiển thị
    $('.tooltip').hover(function() {
        clearTimeout(timer); // Hủy hẹn giờ ẩn
    }, function() {
        // Khi rời khỏi tooltip, ẩn tooltip sau một khoảng thời gian
        timer = setTimeout(function() {
            $('.tooltip').fadeOut(200);
        }, 100);
    });

    // Di chuyển tooltip theo vị trí chuột khi di chuột trên ảnh
    $('.image-plan,.user-image').mousemove(function(event) {
        tooltip.css({
            left: event.pageX + 100 + 'px',
            top: event.pageY - 10 + 'px'
        });
    });


    //dấu 3 chấm

    // Tạo một tooltip element và thêm vào body
    const tooltip_edit = $('<div class="tooltip"><div class="tooltip-three-dots"><span>Chỉnh sửa</span><span>Xóa</span><span>Chuyển trạng thái</span></div></div>');
    $('body').append(tooltip_edit);
    tooltip_edit.hide();


    $('.three-dots').on('click', function() {
        clearTimeout(timer); // Hủy hẹn giờ nếu có
        tooltip_edit.fadeIn(400); // Hiển thị tooltip
        // tooltip.show(); // Hiển thị tooltip

        // Định vị tooltip theo vị trí con trỏ chuột
        tooltip_edit.css({
            left: event.pageX - 50 + 'px',
            top: event.pageY + 102 + 'px'
        });
    });

    $(document).on('click', function(event) {
        // Kiểm tra nếu phần tử được nhấp không phải là nút .three-dots hoặc tooltip
        if (!$(event.target).closest('.three-dots, .tooltip_edit').length) {
            // Ẩn tooltip nếu nhấp ra ngoài
            tooltip_edit.fadeOut(400);
        }
    });


    $(".common-summer-note").summernote();
}
/**
 * initEvents
 *
 * @author    : vietdt
 * @return    : null
 * @access    : public
 * @see       : init
 */
function initEvents() {
    $('#btn-add').on('click', function() {
        window.open('/sao/strategy/plan/create'); 
    });
}
