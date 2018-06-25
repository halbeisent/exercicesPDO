$(document).ready(function () {
    $('.sidenav').sidenav();
    $('select').formSelect();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('.timepicker').timepicker({
        twelveHour: false
    });
});