$('#mdate').bootstrapMaterialDatePicker({ weekStart: 0, time: false });
$('#timepicker').bootstrapMaterialDatePicker({ format: 'HH:mm', time: true, date: false });

// $('.daterange').daterangepicker(
//     {
//         "minDate" : today,
//         "locale": {
//             format: 'DD/MM/YYYY'
//         }
//     }
// );


$('.timerange').daterangepicker({
    timePicker: true,
    timePicker24Hour: true,
    timePickerIncrement: 1,
    locale: {
        format: 'HH:mm'
    }
}).on('show.daterangepicker', function (ev, picker) {
    picker.container.find(".calendar-table").hide();
});