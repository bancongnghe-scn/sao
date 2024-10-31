$(function () {
    initialize();
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
}
