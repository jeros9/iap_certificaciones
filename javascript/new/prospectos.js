$("#datatable").DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
        url: $("#datatable").data('url'),
        dataType: "json",
        type: "POST",
        data: {
            _token: $("meta[name='csrf-token'] ").attr('content')
        }
    },
    language: {
        url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
    },
    columns: [
        { data: "id" }, 
        { data: "nombre" }, 
        { data: "correo" }, 
        { data: "telefono" }, 
        { data: "lugar" },
        { data: "municipio" }, 
        { data: "representante" }, 
        { data: "encargo" }, 
        {
            data: "acciones",
            "orderable": false,
        }
    ],
    // columnDefs: [
    //     {
    //         targets: 3, className: 'compact'
    //     },
    // ]
});