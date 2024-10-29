$(document).ready(function () {
    $("#btnSave").click(function () {
        $("#formview form").submit();
    });
    $("#btnBack").click(function () {
        window.history.back();
    });
    $("#btnGhiLai").click(function () {
        $("#formview form").submit();
    });
    $("#btnSearch").click(function () {
        $("#formview form").submit();
    });
    /* $.fn.datepicker.defaults.language = 'vi';*/

    $(document).on("shown.lte.pushmenu", function () {
        collapseMenu(false);
    });

    $(document).on("collapsed.lte.pushmenu", function () {
        collapseMenu(true);
    });

    // fix for multi dialog
    $(document).on("hidden.bs.modal", ".modal", function (e) {
        if (jQuery("body").find(".modal.show").length > 0) {
            jQuery("body").addClass("modal-open");
        }
    });
    $(document).on("show.bs.modal", ".modal", function () {
        var zIndex = 1040 + 10 * $(".modal:visible").length;
        $(this).css("z-index", zIndex);
        setTimeout(function () {
            $(".modal-backdrop")
                .not(".modal-stack")
                .css("z-index", zIndex - 1)
                .addClass("modal-stack");
        }, 0);
    });
});

function collapseMenu(isCollapse) {
    // $.ajax({
    //     url: "/Extension/SetCollapseMenu",
    //     data: { isCollapse: isCollapse },
    //     dataType: "json",
    //     success: function (data) {},
    //     complete: function (data) {},
    // });
}

function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
}

// set language for select 2
// $.fn.select2.amd.define('select2/i18n/vi', [], function () {
//     // Vie
//     return {
//         errorLoading: function () {
//             return 'Chưa tải được dữ liệu.';
//         },
//         inputTooLong: function (args) {
//             var overChars = args.input.length - args.maximum;
//             var message = 'Tìm kiếm quá nhiều ký tự';
//             return message;
//         },
//         inputTooShort: function (args) {
//             var remainingChars = args.minimum - args.input.length;

//             var message = 'Tìm kiếm quá ít ký tự';

//             return message;
//         },
//         loadingMore: function () {
//             return 'Đang tải dữ liệu…';
//         },
//         maximumSelected: function (args) {
//             var message = 'Giới hạn số lượng lựa chọn';
//             return message;
//         },
//         noResults: function () {
//             return 'Không tìm thấy kết quả';
//         },
//         searching: function () {
//             return 'Đang tìm kiếm…';
//         }
//     };
// });

// $.fn.select2.defaults.set("language", "vi");

// $.fn.select2.amd.require(['select2/selection/search'], function (Search) {
//     var oldRemoveChoice = Search.prototype.searchRemoveChoice;

//     Search.prototype.searchRemoveChoice = function () {
//         oldRemoveChoice.apply(this, arguments);
//         this.$search.val('');
//     };
// });

// $.fn.select2.defaults.set("templateResult", templateResult_Select);

// default value of datatables: language
$.fn.DataTable.defaults.language = {
    url: "/plugins/temp/Vietnamese.json",
};

$.fn.DataTable.defaults.dom =
    "<'row'<'col-sm-12'Bftr>>" +
    "<'row'<'col-md-4 d-none d-md-block d-sm-none pt-2'l><'col-md-4 no-print text-center'p><'col-md-4 text-right d-none d-md-block d-sm-none'i>>";

$.fn.DataTable.defaults.buttons = [];
$.fn.dataTable.ext.errMode = 'none';
var vn_daterangepicker = {
    direction: "ltr",
    format: "DD/MM/YYYY",
    separator: " - ",
    applyLabel: "Ok",
    cancelLabel: "Hủy",
    fromLabel: "Từ",
    toLabel: "Đến",
    customRangeLabel: "Tùy chọn",
    daysOfWeek: ["CN", "Hai", "Ba", "Tư", "Năm", "Sáu", "Bảy"],
    monthNames: [
        "Tháng 1",
        "Tháng 2",
        "Tháng 3",
        "Tháng 4",
        "Tháng 5",
        "Tháng 6",
        "Tháng 7",
        "Tháng 8",
        "Tháng 9",
        "Tháng 10",
        "Tháng 11",
        "Tháng 12",
    ],
    firstDay: 1,
};

function templateResult_Select(data) {
    var className =
        data && data.className != null && data.className != undefined
            ? data.className
            : "";

    var html =
        `<span class="select-item-text ${className}">` + data.text + "</span>";
    var desc = data.description
        ? data.description
        : data.element
        ? data.element.dataset["description"]
        : null;

    if (desc) {
        html += '<span class="select-item-desc">' + desc + "</span>";
    }

    return $("<div>" + html + "</div>");
}

// show or hide loading
jQuery.fn.showLoading = function (time) {
    var overlay = $(this).find(".overlay");
    if (overlay.length <= 0) {
        $(this).html(
            `<i class="fas fa-2x fa-sync-alt fa-spin text-sm"></i> Đang xử lý`
        );
        overlay = $(this).find(".overlay");
    }
    overlay.show();
    time = time == null || time == undefined ? 4000 : time;
    setTimeout(function () {
        overlay.hide();
    }, time);
};

jQuery.fn.hideLoading = function () {
    var overlay = $(this).find(".overlay");
    if (overlay.length > 0) {
        overlay.hide();
    }
};

function dynamicColors() {
    var r = Math.floor(Math.random() * 255);
    var g = Math.floor(Math.random() * 255);
    var b = Math.floor(Math.random() * 255);
    return "rgb(" + r + "," + g + "," + b + ")";
}
$.validator.addMethod(
    "spaceValidate",
    function (value, element) {
        return this.optional(element) || value.replaceAll(" ", "") !== "";
    },
    "Vui lòng nhập đúng định dạng"
);
$.validator.addMethod(
    "customphone",
    function (value, element) {
        return this.optional(element) || /^\d{3}\d{3}\d{4}$/.test(value);
    },
    "Vui lòng nhập đúng định dạng số điện thoại"
);
$.validator.addMethod(
    "specialCharacter",
    function (value, element) {
        var regex = /^[A-Za-z ]+$/;
        return this.optional(element) || regex.test(xoa_dau(value));
    },
    "Không được nhập kí tự đặc biệt và chữ số"
);

$.validator.addMethod(
    "specialCharacterHaveNumber",
    function (value, element) {
        var regex = /^[A-Za-z0-9 ]+$/;
        return this.optional(element) || regex.test(xoa_dau(value));
    },
    "Không được nhập kí tự đặc biệt"
);
$.validator.addMethod(
    "validateVDL",
    function (value, element) {
        var regex = /^[0-9.]+$/;
        return this.optional(element) || regex.test(value);
    },
    "Không được nhập chữ cái và kí tự đặc biệt. Nếu nhập số thập phân, vui lòng nhập kí tự '.' thay cho kí tự ','"
);
$.validator.addMethod(
    "validateVDL0",
    function (value, element) {
        return this.optional(element) || value.replaceAll(".", "") > 0;
    },
    "Nhập số lớn hơn 0"
);
$.validator.addMethod(
    "validateWebUrl",
    function (value, element) {
        var regexp =
            /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/;
        return this.optional(element) || regexp.test(value);
    },
    "nhập đúng định dạng website url"
);
function xoa_dau(str) {
    str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    str = str.replace(/đ/g, "d");
    str = str.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    str = str.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    str = str.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    str = str.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    str = str.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    str = str.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    str = str.replace(/Đ/g, "D");
    return str;
}

$.SconnectJs = function () {};

// common sconnect javascript
$.extend(
    true,
    (SconnectJs = {
        showDialog: function (options) {
            var defaultOptions = {
                id: "popup",
                url: "",
                content: "",
                width: 500,
            };
            options = $.extend(defaultOptions, options);

            var popup = $("#" + options.id);
            if (!popup.length) {
                $("body").append(
                    '<div class="modal fade" id="' +
                        options.id +
                        '"><div class="modal-dialog modal-dialog-centered" style="max-width:' +
                        options.width +
                        'px"></div></div>'
                );
                popup = $("#" + options.id);
            }
            if (options.url != "") {
                popup.find(".modal-dialog").load(options.url);
            }
            if (options.content != "") {
                popup.find(".modal-dialog").html(options.content);
            }
            popup.modal({ backdrop: "static", keyboard: false });
            return popup;
        },
        showConfirmDialog: function (content, title) {
            return SconnectJs.showDialogCustom({
                id: "confirmPopup",
                title: title,
                content: content,
                textYes: `<i class="fa fa-check mr-2"></i>Đồng ý`,
                textNo: `<i class="fa fa-times  mr-2"></i>Hủy`
            });
        },
        showDialogCustom: function (options) {
            var defaultOptions = {
                id: "popup",
                title: "Thông tin",
                type: "#379237", //success | default | primary | secondary | info | warning | success | danger
                overlay: false,
                url: "",
                content: "",
                width: 500,
                height: null,
                textYes: "Ghi lại",
                textNo: "Không",
            };
            options = $.extend(defaultOptions, options);

            // remove old dialog if exists
            var popup = $("#" + options.id);
            if (popup.length) {
                popup.remove();
            }

            // create new dialog
            $("body").append(
                '<div class="modal fade modal" id="' +
                    options.id +
                    '"><div class="modal-dialog modal-dialog-centered" style="max-width:' +
                    options.width +
                    'px"></div></div>'
            );
            popup = $("#" + options.id);
            popup
                .find(".modal-dialog")
                .append(
                    '<div class="modal-content"></div>'
                );
            var content = popup.find(".modal-content");

            // overlay
            if (options.overlay) {
                content.append(`<div class="overlay d-flex justify-content-center align-items-center">
                <i class= "fas fa-2x fa-sync fa-spin" ></i></div>`);
            }

            // init header
            content.append(
                `<div style="display: block;text-align: center;background-color:` +
                    options.type +
                    `!important; color:#fff;border-radius: 7px 7px 0px 0px;" class="modal-header">
                            <h4 class="modal-title">` +
                    options.title +
                    `</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                                
                            </button>
                        </div>`
            );

            //init body
            content.append(
                `<div style="display: flex;justify-content: center;align-items: center;min-height:125px;padding:0px;height: auto;text-align:center;" class="modal-body" ` +
                    (options.height != null
                        ? `style="max-height:` +
                          options.height +
                          `px;overflow-y:auto"`
                        : ``) +
                    `></div>`
            );
            if (options.url != "") {
                content.find(".modal-body").load(options.url);
            }
            if (options.content != "") {
                content.find(".modal-body").html(options.content);
            }

            var htmlYesButton =
                options.textYes == null
                    ? ""
                    : `<button style="border-radius:7px!important;background-color: #379237;color:#fff;padding: 4px 10px 4px 10px!important;" type="button" class="btn cmd-save btn-sm">` +
                      options.textYes +
                      `</button>`;
            var htmlNoButton =
                options.textNo == null
                    ? ""
                    : `<button onclick="closeModal(this)" style="border: 1px solid #D9D9D9;border-radius:7px!important;background-color: #FFFFFF;padding: 4px 10px 4px 10px!important;" type="button" class="btn btn-default cmd-close btn-sm" data-dismiss="modal">` +
                      options.textNo +
                      `</button>`;

            //init footer
            content.append(`<div style="border-top:0px!important;justify-content:center" class="modal-footer">
                            ${htmlNoButton}
                            ${htmlYesButton}
                        </div>`);
            popup.modal({ backdrop: "static", keyboard: false });
            return popup;
        },

        //-------------------------------------------------------

        // helper
        displayFileSize: function (fileSize) {
            var sizes = ["B", "KB", "MB", "GB", "TB"];
            var order = 0;
            while (fileSize >= 1024 && order < sizes.length - 1) {
                order++;
                fileSize = fileSize / 1024;
            }
            var result = fileSize.toFixed(2) + " " + sizes[order];
            return result;
        },

        // create chart
        createChart: function (chartData, ele, height) {
            var func = this;
            height = height == undefined || height == "" ? 250 : height;
            $(ele).empty();
            $.each(chartData, function (index, value) {
                if (value.ChartType == "table") {
                    var tblContent = $(ele)
                        .append(
                            `<div class="chart-table-data" style="min-height: ` +
                                height +
                                `px;"></div>`
                        )
                        .children("div")
                        .last();
                    $(tblContent).html(
                        func.create_DataTable_Chart(chartData, height)
                    );
                } else {
                    var canvasEle = $(ele)
                        .append(
                            `<canvas class="chart-preview" style="min-height: ` +
                                height +
                                `px; height:` +
                                height +
                                `px; max-height:` +
                                height +
                                `px; max-width:100%;"></canvas>`
                        )
                        .children("canvas")
                        .last();
                    if (value.ChartType == "area") {
                        func.create_Area_Chart(value, canvasEle);
                    }
                    if (value.ChartType == "line") {
                        func.create_Line_Chart(value, canvasEle);
                    }
                    if (value.ChartType == "pie") {
                        func.create_Pie_Chart(value, canvasEle);
                    }
                    if (value.ChartType == "bar") {
                        func.create_Bar_Chart(value, canvasEle);
                    }
                }
            });
        },

        // function create area chart
        create_Area_Chart: function (data, ele) {
            var areaChartCanvas = $(ele).get(0).getContext("2d");
            var labels = data.Labels;
            var datasets = [];

            var areaChartData = {
                labels: labels,
                datasets: datasets,
            };

            var areaChartOptions = {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var label =
                                data.datasets[tooltipItem.datasetIndex].label ||
                                "";
                            var unit =
                                data.datasets[tooltipItem.datasetIndex].unit ||
                                "";

                            if (label) {
                                label += ": ";
                            }
                            label +=
                                tooltipItem.yLabel.toLocaleString() +
                                " " +
                                unit;
                            return label;
                        },
                        footer: function (tooltipItem, data) {
                            return (
                                data.datasets[tooltipItem[0].datasetIndex]
                                    .footer || ""
                            );
                        },
                    },
                },
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false,
                },
                scales: {
                    xAxes: [
                        {
                            gridLines: {
                                display: false,
                            },
                        },
                    ],
                    yAxes: [
                        {
                            gridLines: {
                                display: false,
                            },
                        },
                    ],
                },
                title: {
                    display: true,
                    text: data.ChartTitle,
                },
            };

            if (
                data.Datasets2 &&
                data.Datasets2.length > 0 &&
                data.Datasets2[0].Data.length > 0
            ) {
                // add yAxes option:
                $.each(data.Datasets2, function (index, value) {
                    var color = dynamicColors();
                    datasets.push({
                        label: value.Label,
                        borderColor: color,
                        backgroundColor: color,
                        borderborderWidth: 3,
                        data: value.Data,
                        fill: false,
                        type: value.Type,
                        yAxisID: "RIGHT",
                        unit: value.Unit,
                    });
                });

                $.each(data.Datasets, function (index, value) {
                    datasets.push({
                        label: value.Label,
                        backgroundColor: dynamicColors(),
                        data: value.Data,
                        yAxisID: "LEFT",
                        unit: value.Unit,
                        footer: value.Footer,
                    });
                });

                areaChartOptions.scales.yAxes = [
                    {
                        display: true,
                        id: "LEFT",
                        type: "linear",
                        position: "left",
                    },
                    {
                        display: true,
                        id: "RIGHT",
                        type: "linear",
                        position: "right",
                        gridLines: {
                            display: false,
                        },
                    },
                ];
            } else {
                $.each(data.Datasets, function (index, value) {
                    datasets.push({
                        label: value.Label,
                        backgroundColor: dynamicColors(),
                        data: value.Data,
                        unit: value.Unit,
                        footer: value.Footer,
                    });
                });
            }

            var areaChart = new Chart(areaChartCanvas, {
                type: "line",
                data: areaChartData,
                options: areaChartOptions,
            });
            return areaChart;
        },

        // function create line chart
        create_Line_Chart: function (data, ele) {
            var lineChartCanvas = $(ele).get(0).getContext("2d");
            var labels = data.Labels;
            var datasets = [];

            var areaChartData = {
                labels: labels,
                datasets: datasets,
            };

            var areaChartOptions = {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var label =
                                data.datasets[tooltipItem.datasetIndex].label ||
                                "";
                            var unit =
                                data.datasets[tooltipItem.datasetIndex].unit ||
                                "";

                            if (label) {
                                label += ": ";
                            }
                            label +=
                                tooltipItem.yLabel.toLocaleString() +
                                " " +
                                unit;
                            return label;
                        },
                        footer: function (tooltipItem, data) {
                            return (
                                data.datasets[tooltipItem[0].datasetIndex]
                                    .footer || ""
                            );
                        },
                    },
                },
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: true,
                },
                scales: {
                    xAxes: [
                        {
                            gridLines: {
                                display: true,
                            },
                        },
                    ],
                    yAxes: [
                        {
                            gridLines: {
                                display: true,
                            },
                        },
                    ],
                },
                datasetFill: false,
                title: {
                    display: true,
                    text: data.ChartTitle,
                },
            };

            if (
                data.Datasets2 &&
                data.Datasets2.length > 0 &&
                data.Datasets2[0].Data.length > 0
            ) {
                // add yAxes option:
                $.each(data.Datasets2, function (index, value) {
                    var color = dynamicColors();
                    datasets.push({
                        label: value.Label,
                        borderColor: color,
                        backgroundColor: color,
                        borderborderWidth: 3,
                        data: value.Data,
                        fill: false,
                        type: value.Type,
                        yAxisID: "RIGHT",
                        unit: value.Unit,
                    });
                });

                $.each(data.Datasets, function (index, value) {
                    datasets.push({
                        label: value.Label,
                        backgroundColor: dynamicColors(),
                        borderColor: dynamicColors(),
                        data: value.Data,
                        fill: false,
                        yAxisID: "LEFT",
                        footer: value.Footer,
                        unit: value.Unit,
                    });
                });

                areaChartOptions.scales.yAxes = [
                    {
                        display: true,
                        id: "LEFT",
                        type: "linear",
                        position: "left",
                    },
                    {
                        display: true,
                        id: "RIGHT",
                        type: "linear",
                        position: "right",
                        gridLines: {
                            display: false,
                        },
                    },
                ];
            } else {
                $.each(data.Datasets, function (index, value) {
                    datasets.push({
                        label: value.Label,
                        backgroundColor: dynamicColors(),
                        borderColor: dynamicColors(),
                        data: value.Data,
                        fill: false,
                        unit: value.Unit,
                        footer: value.Footer,
                    });
                });
            }

            var lineChart = new Chart(lineChartCanvas, {
                type: "line",
                data: areaChartData,
                options: areaChartOptions,
            });
            return lineChart;
        },

        create_Pie_Chart: function (data, ele) {
            var pieChartCanvas = $(ele).get(0).getContext("2d");
            var labels = data.Labels;
            var datasets = [];
            var backgroundColor = [];
            var flg_setBackGroundColor = true;
            $.each(data.Datasets, function (index, value) {
                if (flg_setBackGroundColor) {
                    $.each(value.Data, function (index, value) {
                        backgroundColor.push(dynamicColors());
                    });
                    flg_setBackGroundColor = false;
                }

                datasets.push({
                    label: value.Label,
                    backgroundColor: backgroundColor,
                    data: value.Data,
                    fill: false,
                    unit: value.Unit,
                });
            });

            var pieData = {
                labels: labels,
                datasets: datasets,
            };
            var pieOptions = {
                tooltips: {
                    callbacks: {
                        title: function (arr_tooltipItem, data) {
                            var tooltipItem = arr_tooltipItem[0];
                            var lb_text =
                                data.datasets[tooltipItem.datasetIndex].label ||
                                "";
                            return lb_text;
                        },
                        label: function (tooltipItem, data) {
                            var lb_text = data.labels[tooltipItem.index];
                            var lb_value =
                                data.datasets[tooltipItem.datasetIndex].data[
                                    tooltipItem.index
                                ].toLocaleString();
                            var unit =
                                data.datasets[tooltipItem.datasetIndex].unit ||
                                "";
                            return lb_text + ": " + lb_value + " " + unit;
                        },
                        afterLabel: function (tooltipItem, data) {
                            var sum = 0;
                            var dataArr =
                                data.datasets[tooltipItem.datasetIndex].data;
                            var value = dataArr[tooltipItem.index];
                            dataArr.map((data) => {
                                sum += data;
                            });
                            var percentage =
                                ((value * 100) / sum).toFixed(2) + "%";
                            return "(" + percentage + ")";
                        },
                    },
                },
                maintainAspectRatio: false,
                responsive: true,
                title: {
                    display: true,
                    text: data.ChartTitle,
                },
            };

            var pieChart = new Chart(pieChartCanvas, {
                type: "pie",
                data: pieData,
                options: pieOptions,
            });
            return pieChart;
        },

        create_Bar_Chart: function (data, ele) {
            var barChartCanvas = $(ele).get(0).getContext("2d");
            var labels = data.Labels;
            var datasets = [];

            var barChartOptions = {
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var label =
                                data.datasets[tooltipItem.datasetIndex].label ||
                                "";
                            var unit =
                                data.datasets[tooltipItem.datasetIndex].unit ||
                                "";

                            if (label) {
                                label += ": ";
                            }
                            label +=
                                tooltipItem.yLabel.toLocaleString() +
                                " " +
                                unit;
                            return label;
                        },
                        footer: function (tooltipItem, data) {
                            return (
                                data.datasets[tooltipItem[0].datasetIndex]
                                    .footer || ""
                            );
                        },
                    },
                },
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false,
                title: {
                    display: true,
                    text: data.ChartTitle,
                },
                scales: {
                    xAxes: [
                        {
                            //barThickness: 50,  // number (pixels) or 'flex'
                            maxBarThickness: 100, // number (pixels),
                        },
                    ],
                    yAxes: [
                        {
                            ticks: {
                                beginAtZero: true,
                            },
                        },
                    ],
                },
            };

            // if has multi yAxes
            if (
                data.Datasets2 &&
                data.Datasets2.length > 0 &&
                data.Datasets2[0].Data.length > 0
            ) {
                // add yAxes option:
                $.each(data.Datasets2, function (index, value) {
                    var color = dynamicColors();
                    datasets.push({
                        label: value.Label,
                        borderColor: color,
                        backgroundColor: color,
                        borderborderWidth: 3,
                        data: value.Data,
                        fill: false,
                        type: value.Type,
                        yAxisID: "RIGHT",
                        unit: value.Unit,
                    });
                });

                $.each(data.Datasets, function (index, value) {
                    datasets.push({
                        label: value.Label,
                        backgroundColor: dynamicColors(),
                        data: value.Data,
                        fill: false,
                        yAxisID: "LEFT",
                        footer: value.Footer,
                        unit: value.Unit,
                    });
                });

                barChartOptions.scales.yAxes = [
                    {
                        display: true,
                        id: "LEFT",
                        type: "linear",
                        position: "left",
                    },
                    {
                        display: true,
                        id: "RIGHT",
                        type: "linear",
                        position: "right",
                        gridLines: {
                            display: false,
                        },
                    },
                ];
            } else {
                $.each(data.Datasets, function (index, value) {
                    datasets.push({
                        label: value.Label,
                        backgroundColor: dynamicColors(),
                        data: value.Data,
                        fill: false,
                        footer: value.Footer,
                        unit: value.Unit,
                    });
                });
            }

            var barChartData = {
                labels: labels,
                datasets: datasets,
            };

            var barChart = new Chart(barChartCanvas, {
                type: "bar",
                data: barChartData,
                options: barChartOptions,
            });
            return barChart;
        },

        create_DataTable_Chart: function (lstChartData, height) {
            var html = "";
            height = height == undefined || height == "" ? 300 : height;
            if (lstChartData.length > 0) {
                var isFirstTable = true;
                var col_count = 1;
                $.each(lstChartData, function (index, chartData) {
                    // create header
                    if (isFirstTable) {
                        html +=
                            `<div class="table-responsive" style="max-height:` +
                            height * lstChartData.length +
                            `px">
                        <table class="table table-bordered table-head-fixed table-dulieu-bieudo" width="100%">
                            <thead>
                                <tr>
                                    <th>Tiêu chí</th>`;

                        col_count += chartData.Datasets.length;

                        $.each(chartData.Datasets, function (dtsetIndex, data) {
                            html += `<th class='text-right'>${data.Label}${
                                data.Unit
                                    ? "<br/><span style='font-weight:normal;font-style:italic'>(" +
                                      data.Unit +
                                      ")</span>"
                                    : ""
                            }</th>`;
                        });

                        if (
                            chartData.Datasets2 &&
                            chartData.Datasets2.length > 0 &&
                            chartData.Datasets2[0].Data &&
                            chartData.Datasets2[0].Data.length > 0
                        ) {
                            col_count += chartData.Datasets2.length;

                            $.each(
                                chartData.Datasets2,
                                function (dtsetIndex, data) {
                                    html += `<th class='text-right'>${
                                        data.Label
                                    }${
                                        data.Unit
                                            ? "<br/><span style='font-weight:normal;font-style:italic'>(" +
                                              data.Unit +
                                              ")</span>"
                                            : ""
                                    }</th>`;
                                }
                            );
                        }

                        html += `</tr></thead><tbody>`;
                    }

                    if (lstChartData.length > 1 && chartData.ChartTitle) {
                        html += `<tr style="background-color:#d3f8f0;"><td colspan="${col_count}"><b>${chartData.ChartTitle}</b></td></tr>`;
                    }

                    $.each(chartData.Labels, function (labelIndex, label) {
                        html += "<tr><td>" + label + "</td>";
                        $.each(chartData.Datasets, function (dtsetIndex, data) {
                            html +=
                                "<td class='text-right'>" +
                                data.Data[labelIndex].toLocaleString() +
                                "</td>";
                        });

                        if (
                            chartData.Datasets2 &&
                            chartData.Datasets2.length > 0 &&
                            chartData.Datasets2[0].Data &&
                            chartData.Datasets2[0].Data.length > 0
                        ) {
                            $.each(
                                chartData.Datasets2,
                                function (dtsetIndex, data) {
                                    html +=
                                        "<td class='text-right'>" +
                                        data.Data[labelIndex].toLocaleString() +
                                        "</td>";
                                }
                            );
                        }

                        html += "</tr>";
                    });
                    isFirstTable = false;
                });
                html += `</tbody></table></div>`;
            }
            return html;
        },

        dynamicColors: function () {
            var r = Math.floor(Math.random() * 255);
            var g = Math.floor(Math.random() * 255);
            var b = Math.floor(Math.random() * 255);
            return "rgb(" + r + "," + g + "," + b + ")";
        },

        showImageOfPdf: function (filePath) {
            var ext = filePath.split(".").pop();
            var html = "";
            switch (ext) {
                case "pdf":
                    html =
                        `<iframe src="` +
                        filePath.replace("~", "") +
                        `" style="width:100%; height:700px;" frameborder="0"></iframe>`;
                    break;
                case "docx":
                    html = `<a href="${filePath}">Tải file đính kèm</a>`;
                    break;
                case "png":
                case "jpg":
                case "jpeg":
                    html =
                        `<img src="` +
                        filePath.replace("~", "") +
                        `" style="width: 100%; height: auto;" />`;
                    break;
                default:
                    html =
                        `<iframe src="` +
                        filePath.replace("~", "") +
                        `" style="width:100%; height:700px;" frameborder="0"></iframe>`;
                    break;
            }
            var dialog = SconnectJs.showDialogCustom({
                id: "filePreviewer",
                width: 800,
                textYes: null,
                textNo: "Đóng",
                content: html,
                title: "File đính kèm",
            });

            dialog.find(".cmd-close").click(function () {
                dialog.modal("hide");
            });
        },
        // check file word pdf img vs show file html

        ShowFile: function (options) {
            var file = options.file.split(".").pop();
            options.file != null || options.file != undefined
                ? (filename = options.file.substring(37))
                : filename;
            var linkfile = options.linkfile;
            var showhtml = "";
            var idshow = options.idshow;
            switch (file.toLowerCase()) {
                case "pdf":
                    showhtml = `<div id="showFile" class="row m-3">
            <div class="col-md-12 mt-3 mb-3">
                <i class="far fa-file-pdf text-primary" style="font-size:50px"></i>
            </div>
            <div class="col-md-12 p-2" style="background-color: #f8f9fa">
                <a href="#" onclick="SconnectJs.showImageOfPdf('${linkfile}')"><i class="fas fa-paperclip"></i> ${filename}</a>
            </div>
        </div>`;
                    break;
                case "jpg":
                case "gif":
                case "bmp":
                case "png":
                case "jpeg":
                case "pdf":
                case "psd":
                case "tiff":
                    showhtml = `<div id="showFile" class="row m-3">
            <div class="col-md-12 mt-3 mb-3">
                <img src="${linkfile})" style="width:50px; heigth:auto"/>
            </div>
            <div class="col-md-12 p-2" style="background-color: #f8f9fa">
                <a href="#" onclick="SconnectJs.showImageOfPdf('${linkfile}')"><i class="fas fa-paperclip"></i> ${filename}</a>
            </div>
        </div>`;
                    break;
                default:
                    showhtml = `<div id="showFile" class="row">
            <div class="col-md-12 mt-3 mb-3">
                <i class="fas fa-paperclip text-primary" style="font-size:50px"></i>
            </div>
            <div class="col-md-12 p-2" style="background-color: #f8f9fa">
                <a href="${linkfile}"><i class="fa fa-download"></i> ${filename}</a>
            </div>
        </div>`;
                    break;
            }
            idshow.append(showhtml);
        },
        
    })
);
function minmax(value, min, max) {
    if (parseInt(value) < min || isNaN(parseInt(value))) return min;
    else if (parseInt(value) > max) return max;
    else return value;
}
function ThemDauPhay(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
// so sánh ngày bắt đầu && ngày kết thúc
function CompareDate(starDate, endDate) {
    var st1 = starDate.split("/").reverse().join("-");
    var pattern1 = /(\d{2})\.(\d{2})\.(\d{4})/;
    var dt1 = new Date(st1.replace(pattern1, "$3-$2-$1"));

    var st2 = endDate.split("/").reverse().join("-");
    var pattern2 = /(\d{2})\.(\d{2})\.(\d{4})/;
    var dt2 = new Date(st2.replace(pattern2, "$3-$2-$1"));
    if (dt2 >= dt1) {
        return true;
    }
    return false;
}
function closeModal(e){
    $(e).closest('#confirmPopup').modal('hide');
}
function soSanhGio(gio1, gio2) {
    const gio1Date = new Date(`2000-01-01T${gio1}:00`);
    const gio2Date = new Date(`2000-01-01T${gio2}:00`);
    if (gio1Date < gio2Date) {
        return true;
    }else {
        return false;
    }
}
