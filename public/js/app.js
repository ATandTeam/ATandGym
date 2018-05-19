/*
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}   http://codeseven.github.io/toastr/demo.html <-------- DOCS
 */
toastr.options = {
    "closeButton": true,
    "positionClass": "toast-bottom-right",
    "progressBar": true
}
window.addEventListener('load', function() {
    function updateOnlineStatus(event) {
        var condition = navigator.onLine ? "online" : "offline";

        if (!navigator.onLine) {
            toastr.error('La conexión se ha perdido :(','Error de conexión');
        }else{
            toastr.success('Conexión establecida');
        }
    }

    window.addEventListener('online',  updateOnlineStatus);
    window.addEventListener('offline', updateOnlineStatus);
});

$(document).ready(function() {
    //http://igorescobar.github.io/jQuery-Mask-Plugin/docs.html
    $(".fecha").attr("placeholder", "dd/mm/yyy");
    $(".fecha").mask('00/00/0000');
    //Para manejar fechas de nacimiento. (Sin horas, minutos ni seg.)

    $(".hora").attr("placeholder", "hh:mm");
    $(".hora").mask('00:00');

    $(".cupo").attr("placeholder", "88");
    $(".cupo").mask('00');

    $(".telefono").attr("placeholder","(888) 888 88 88");
    $(".telefono").mask('(000) 000 00 00');


});