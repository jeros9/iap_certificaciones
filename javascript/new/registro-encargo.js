$(document).ready(function () {
    $("#pais").change(function () { estado_dependencia(); });
    $("#estado").change(function () { ciudad_dependencia(); });
    $("#paist").change(function () { estado_dependenciat(); });
    $("#estadot").change(function () { ciudad_dependenciat(); });
    $("#curricula").change(function () { personal(); });
    $("#estados").change(function () {
        let estado = $(this).val();
        $.ajax({
            url: WEB_ROOT + '/ajax/new/location.php',
            type: "POST",
            data: { type: "getMunicipios", state: estado },
            success: function (data) {
                $('#ciudad').html(data);
            },
            error: function () {
                alert('Algo salio mal, compruebe su conexión a internet');
            }
        });
    }); 
});

function estado_dependenciat() {
    var paisId = $("#paist").val();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/dependencia-estadot.php',
        type: "POST",
        data: { type: "loadCities", paisId: paisId },
        success: function (data) {
            var splitResponse = data.split("[#]");
            $('#Statepositiont').html(splitResponse[0]);
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
}

function ciudad_dependenciat() {
    var estadoId = $("#estadot").val();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/dependencia-ciudadest.php',
        type: "POST",
        data: { type: "loadCities", estadoId: estadoId },
        success: function (data) {
            var splitResponse = data.split("[#]");
            $('#Citypositiont').html(splitResponse[0]);
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
}

function estado_dependencia() {
    var paisId = $("#pais").val();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/dependencia-estado.php',
        type: "POST",
        data: { type: "loadCities", paisId: paisId },
        success: function (data) {
            var splitResponse = data.split("[#]");
            $('#Stateposition').html(splitResponse[0]);
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
}

function ciudad_dependencia() {
    var estadoId = $("#estado").val();
    $.ajax({
        url: WEB_ROOT + '/ajax/new/dependencia-ciudades.php',
        type: "POST",
        data: { type: "loadCities", estadoId: estadoId },
        success: function (data) {
            var splitResponse = data.split("[#]");
            $('#Cityposition').html(splitResponse[0]);
        },
        error: function () {
            alert('Algo salio mal, compruebe su conexión a internet');
        }
    });
}

function recargarPage() {
    WEB_ROOTDoc = WEB_ROOT + '/login';
    $(location).attr('href', WEB_ROOTDoc);
}
