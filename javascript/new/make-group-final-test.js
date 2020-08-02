$(document).ready(function () {
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
        alert("Acción no permitida");
    });

    $("body").on("contextmenu",function(e) {
        alert("Acción no permitida");
        return false;
    });
});