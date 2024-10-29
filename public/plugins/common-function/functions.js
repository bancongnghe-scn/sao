// LOAD AJAX
/*
    loadAjaxPost(url, params, {
        beforeSend: function(){},
        success:function(result){},
        error: function (error) {}
    }, 'loading');
*/
loadAjaxPost = function (
    url,
    params,
    option,
    type = "loading",
    isToast = true
) {
    var _option = {
        beforeSend: function () {},
        success: function (result) {},
        error: function (error) {},
        async: true,
        processData: true,
        contentType: true,
        json: false,
    };
    $.extend(_option, option);
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        url: url,
        data: _option.json ? JSON.stringify(params) : params,
        async: _option.async,
        processData: _option.processData,
        contentType: _option.contentType,
        beforeSend: function () {
            switch (type) {
                case "loading":
                    loadingBox("open");
                    break;
            }
            _option.beforeSend();
        },
        success: function (result) {
            switch (type) {
                case "loading":
                    loadingBox("close");
                    break;
            }
            _option.success(result);
            if (isToast) {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                };
                if (result.error) {
                    toastr.error(result.error);
                }
                if (result.message) {
                    toastr.success(result.message);
                }
            }
        },
        error: function (error) {
            switch (type) {
                case "loading":
                    loadingBox("close");
                    break;
            }
            alertText(error.responseJSON?.message, "error");
            _option.error(error);
        },
    });
};

/*
    loadAjaxGet(url, {
        beforeSend: function(){},
        success:function(result){},
        error: function (error) {}
    }, 'loading');
*/
loadAjaxGet = function (url, option, type = "loading", data = {}) {
    var _option = {
        beforeSend: function () {},
        success: function (result) {},
        error: function (error) {},
        async: true,
    };
    $.extend(_option, option);
    $.ajax({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "GET",
        url: url,
        data: data,
        async: _option.async,
        beforeSend: function () {
            switch (type) {
                case "loading":
                    loadingBox("open");
                    break;
            }
            _option.beforeSend();
        },
        success: function (result) {
            switch (type) {
                case "loading":
                    loadingBox("close");
                    break;
            }
            _option.success(result);
        },
        error: function (error) {
            switch (type) {
                case "loading":
                    loadingBox("close");
                    break;
            }
            alertText(error.message, "error");
            _option.error(error);
        },
    });
};

// LoadingBox
const loadingBox = function (type) {
    if (type === "open") {
        $("body").append(
            '<section id="loading_box"><div id="loading_image"></div></section>'
        );
        $("#loading_box")
            .css({ visibility: "visible", opacity: 0.0, height: "100vh" })
            .animate({ opacity: 1.0 }, 200);
    } else {
        $("#loading_box").animate({ opacity: 0.0 }, 200, function () {
            $("#loading_box").remove();
        });
    }
};

/**
 * Response alert
 */
const alertText = function (text = "", type = "success") {
    switch (type) {
        case "success":
            console.log(text);
            break;
        case "info":
            console.log(text);
            break;
        case "error":
            console.log(text);
            break;
        case "warning":
            console.log(text);
            break;
    }
};

/**
 * In Array
 */
const inArray = function (needle, haystack) {
    var length = haystack.length;
    for (var i = 0; i < length; i++) {
        if (haystack[i] == needle) return true;
    }
    return false;
};

const inArrayFileExt = function (file, extArray) {
    let fileName = file.name;
    let fileExt = fileName.split(".");
    fileExt = fileExt[fileExt.length - 1];
    fileExt = fileExt.toLowerCase();

    return inArray(fileExt, extArray);
};

const setSession = function (key, value, callback) {
    loadAjaxPost(
        SET_SESSION_AJAX_URL,
        {
            key: key,
            value: value,
        },
        {
            beforeSend: function () {},
            success: function (result) {
                callback();
            },
            error: function (error) {},
        }
    );
};

/**
 * Download file
 * @param dataUrl string
 * @param fileName string|null
 */
const download = function (dataUrl, fileName = null) {
    // Set File Name
    let split = dataUrl.split("/");
    let name = split[split.length - 1];
    if (fileName != null) {
        name = fileName;
    }

    // Create Element and Download
    const link = document.createElement("a");
    link.href = dataUrl;
    link.download = name;
    link.click();
};

/**
 * Open all file attach
 */
const openAllFileAttach = function (fileData, field = null) {
    if (field == null) {
        field = "#openAllFileAttach";
    }

    $(field).on("click", function () {
        for (const key in fileData) {
            let data = fileData[key];

            if (data.url) {
                if (data.url.includes(ASSET_URL) == false) {
                    data.url = ASSET_URL + data.url;
                }

                let dataObj = {
                    name: data.url,
                };

                if (inArrayFileExt(dataObj, ["xml"])) {
                    download(data.url);
                } else {
                    const newTab = window.open(data.url);
                    const error = self.checkPopupBlocker(newTab);
                    if (error) {
                        break;
                    }
                }
            }
        }
    });
};

const checkPopupBlocker = function (popupWindow) {
    let error = false;
    if (popupWindow) {
        popupWindow.onload = function () {
            if (popupWindow.innerHeight > 0 == false) {
                error = true;
            }
        };
    } else {
        error = true;
    }

    if (error == true) {
        $.confirm({
            title: "",
            content: "",
            buttons: {
                ok: {
                    text: "OK",
                    btnClass: "btn-blue",
                    action: function () {},
                },
                cancel: {
                    text: "Cancel",
                    btnClass: "btn-secondary",
                    action: function () {},
                },
            },
        });
    }

    return error;
};
//==================================================================
// Show Loading
//================================================================
const showLoadingDialog = function () {
    $("body").append(
        '<section id="loading_box"><div id="loading_image"></div></section>'
    );
    $("#loading_box")
        .css({
            visibility: "visible",
            opacity: 0.0,
            height: "100vh",
        })
        .animate({ opacity: 1.0 }, 200);
};
