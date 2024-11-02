$(function () {
    initialize();
    popup_create_strategic_objectives();
    tree()
});

function initialize() {

    $(document).on('focus', '.input-group.date', function() {
        $(this).datepicker({
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
            todayHighlight: true
        });
    });

    $('.select2').select2({
        placeholder: 'Chọn đơn vị tham gia',
        dropdownParent: $('body')
    }).on("change", function () {
        let maxItems = 3;
        let $selection = $(this).next('.select2-container').find('.select2-selection__rendered');
        let selectedItems = $selection.children('.select2-selection__choice');

        if (selectedItems.length > maxItems) {
            selectedItems.slice(maxItems).hide();
            if ($selection.children('.select2-selection__ellipsis').length === 0) {
                $selection.append('<span class="select2-selection__ellipsis">...</span>');
            }
        } else {
            selectedItems.show();
            $selection.children('.select2-selection__ellipsis').remove();
        }
    });

    $('.toggle-btn').on('click', function () {
        let icon = $(this).find('i');
        if (icon.hasClass('fa-chevron-down')) {
            icon.removeClass('fa-chevron-down').addClass('fa-chevron-up');
        } else {
            icon.removeClass('fa-chevron-up').addClass('fa-chevron-down');
        }
    });

    // document.querySelectorAll('.nested').forEach(nested => {
    //     console.log(nested)
    //     // Tìm tất cả các .point là con trực tiếp của .nested hiện tại
    //     const directPoints = Array.from(nested.children).filter(child => child.classList.contains('point'));
    //     if (directPoints.length > 0) {
    //         // Chỉ thêm lớp last-point vào phần tử .point cuối cùng trong các con trực tiếp
    //         directPoints[directPoints.length - 1].classList.add('last-point');
    //     }
    //
    //     if (directPoints.length > 1) {
    //         const firstPoint = directPoints[0];
    //         const lastPoint = directPoints[directPoints.length - 1];
    //
    //         // Lấy khoảng cách từ .point đầu tiên đến .point cuối cùng
    //         const distance = lastPoint.getBoundingClientRect().top - firstPoint.getBoundingClientRect().top;
    //
    //         // Log khoảng cách ra console
    //         console.log(`Khoảng cách từ .point đầu tiên đến .point cuối cùng trong .nested hiện tại là: ${distance}px`);
    //
    //         // Nếu bạn muốn sử dụng khoảng cách này cho mục đích khác, bạn có thể lưu nó vào một biến hoặc thuộc tính
    //     }
    // });

    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.nested').forEach(nested => {
            const directPoints = Array.from(nested.children).filter(child => child.classList.contains('point'));

            if (directPoints.length > 1) {
                const firstPoint = directPoints[0];
                const lastPoint = directPoints[directPoints.length - 1];

                const distance = lastPoint.getBoundingClientRect().top - firstPoint.getBoundingClientRect().top;
                console.log(`Khoảng cách từ .point đầu tiên đến .point cuối cùng là: ${distance}px`);
            }
        });
    });









}

function popup_create_strategic_objectives () {
    $(document).ready(function() {

        // Biến để đếm số lượng hàng chính
        let rowCount = $("#list-objectives .parent-item").length;

        // Thêm item chính
        $("#btn-add-objectives").click(function() {
            rowCount++;
            let newItem = `
        <div class="row mb-3 align-items-center parent-item" id="item-${rowCount}">
            <div class="col-md-1 d-flex justify-content-center align-middle">
                <div class="d-flex justify-content-center align-items-center btn-toggle-child" >

                    <svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.5 17L6.43782 9.5L18.5622 9.5L12.5 17Z" fill="#101828"/>
                    </svg>
                </div>
                <input type="text" class="form-control text-center" value="${rowCount}" disabled>
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

            <!-- Item Con -->
            <div class="col-12 mt-2 child-content">
                <div class="child-actions"></div>
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
        </div>`;

            $('#list-objectives').append(newItem);

            initialize();
        });

        $(document).on('click', '.btn-add-child', function() {
            let newChild = `
                <div class="row mt-2 child-row">
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
                </div>`;
            $(this).closest('.col-12').find('.child-actions').append(newChild);
        });

        // Xóa hàng con
        $(document).on('click', '.btn-remove-child', function() {
            $(this).closest('.child-row').remove();
        });

        // Xóa hàng chính
        $(document).on('click', '.removeRow', function() {
            rowCount--;
            $(this).closest('.parent-item').remove();

            updateParentItems();
        });


        // Toggle item con
        $(document).on('click', '.btn-toggle-child', function() {
            let parentItem = $(this).closest('.parent-item');
            let childContent = parentItem.find('.child-content');
            let svgIcon = $(this).find('svg path');

            if (childContent.is(':visible')) {
                childContent.slideUp();
                svgIcon.attr('d', 'M12.5861 8.99883L18.7245 16.4365L6.60078 16.5603L12.5861 8.99883Z');
            } else {
                childContent.slideDown();
                svgIcon.attr('d', 'M12.5 17L6.43782 9.5L18.5622 9.5L12.5 17Z');
            }
        });

        // Hàm cập nhật lại id và giá trị sau khi xóa
        function updateParentItems() {
            // Đếm lại số hàng còn lại
            $("#list-objectives .parent-item").each(function(index) {
                let newIndex = index + 1; // Tính lại thứ tự cho các item

                // Cập nhật lại id của hàng
                $(this).attr('id', 'item-' + newIndex);

                // Cập nhật lại giá trị hiển thị trong input
                $(this).find('input[type="text"]:first').val(newIndex);
            });
        }
    });
}

function tree()
{
    $.fn.extend({
        treed: function (o) {

            let openedClass = 'fas fa-caret-up';
            let closedClass = 'fas fa-caret-down';
            if (typeof o != 'undefined'){
                if (typeof o.openedClass != 'undefined'){
                    openedClass = o.openedClass;
                }
                if (typeof o.closedClass != 'undefined'){
                    closedClass = o.closedClass;
                }
            }

            let tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function () {
                let branch = $(this)
                branch.prepend("<i class='indicator fas " + closedClass + "'></i>");
                branch.addClass('branch');
                branch.on('click', function (e) {
                    if (this === e.target) {
                        let icon = $(this).children('svg:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
            });
            tree.find('.branch .indicator').each(function(){
                $(this).on('click', function () {
                    $(this).closest('li').click();
                });
            });
            tree.find('.branch>a').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
            tree.find('.branch>button').each(function () {
                $(this).on('click', function (e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });

            tree.find('.edit, .create, .delete, .comment').on('click', function (e) {
                e.stopPropagation();
            });
        }
    });


    $('#tree1').treed();
    $('#tree2').treed();
    $('#tree3').treed();
    $('#tree4').treed();
    $('#tree5').treed();
}
