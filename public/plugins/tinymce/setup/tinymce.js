function image_upload_handler(blobInfo, success, failure, progress) {
    var xhr, formData;

    xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', '/upload');
    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));

    xhr.upload.onprogress = function (e) {
        progress(e.loaded / e.total * 100);
    };

    xhr.onload = function () {
        var json;

        if (xhr.status === 403) {
            failure('HTTP Error: ' + xhr.status, {remove: true});
            return;
        }

        if (xhr.status < 200 || xhr.status >= 300) {
            failure('HTTP Error: ' + xhr.status);
            return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
            failure('Invalid JSON: ' + xhr.responseText);
            return;
        }

        success(json.location);
    };

    xhr.onerror = function () {
        failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
    };

    formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    xhr.send(formData);
};

function init_key_callback(editor) {
    editor.on('keyup', function (e) {

        var target = $(this).attr('id');
        var limit = $('#' + target).attr('maxlength');
        if (limit) {
            var contentLength = tinymce.get(target).getContent({format: "text"}).length;
            if (contentLength > limit) {
                $('#characters_' + target).hide();
                $('#characters_' + target + '_error').show();
            } else if (contentLength == 0) {
                $('#characters_' + target).text("");
            } else {
                $('#characters_' + target).text(contentLength + "/" + limit);
                $('#characters_' + target).show();
                $('#characters_' + target + '_error').hide();
            }
        }
    });
};

var KTTinymce = function () {
    // Private functions
    var demos = function () {

        tinymce.init({
            selector: '#kt-tinymce-1',
            toolbar: false,
            statusbar: false
        });

        tinymce.init({
            selector: '#kt-tinymce-2'
        });

        tinymce.init({
            selector: '#kt-tinymce-3',
            toolbar: 'advlist | autolink | link image | lists charmap | print preview',
            plugins: 'advlist autolink link image lists charmap print preview'
        });

        tinymce.init({
            selector: '.tinymce-full',
            forced_root_block: "div",
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount imagetools',
            image_dimensions: false,
            content_style: "body {font-size: 14px;}",
            fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 24px 32px 36px 48px 64px',
            promotion: false,
            statusbar: false,
            images_upload_handler: image_upload_handler,
            init_instance_callback: init_key_callback,

        });
        tinymce.init({
            selector: '.tinymce-full-course',
            forced_root_block: "div",
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount imagetools',
            image_dimensions: false,
            promotion: false,
            statusbar: false,
            images_upload_handler: image_upload_handler,

        });

        tinymce.init({
            selector: '.tinymce-mini',
            menubar: false,
            forced_root_block: "div",
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount imagetools',
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | link image | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 24px 32px 36px 48px 64px',
            image_dimensions: false,
            images_upload_handler: image_upload_handler,
            init_instance_callback: init_key_callback,
            promotion: false,
            statusbar: false,
            content_style: "body {font-size: 14px;}",
            fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 24px 32px 36px 48px 64px'
        });
        tinymce.init({
            selector: '.tinymce-mini-course',
            menubar: false,
            forced_root_block: "div",
            plugins: 'advlist autolink lists link image charmap print preview anchor searchreplace visualblocks code fullscreen insertdatetime media table paste code help wordcount imagetools',
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | link image | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            image_dimensions: false,
            promotion: false,
            statusbar: false,
            images_upload_handler: image_upload_handler,
        });
    };

    return {
        // public functions
        init: function () {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function () {
    KTTinymce.init();
});
