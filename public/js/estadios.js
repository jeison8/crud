
/* VARIABLES */


/* FUNCIONES */

//ajax que permite cambiar el estado del usuario a inactivo
function eliminarEstadio(estadio_id) {

    var confirmacion = confirm("Desea eleminar este regitro?");

    if (confirmacion) {
        //token de peticion que se encuentra en los meta del index
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/estadios/' + estadio_id,
            type: 'delete',
            success: function (response) {
                location.reload();
            },
            error: function (err) {
                console.log(err);
            }
        });
    }
}



/* READY */
$(function () {
    $('#estadios').DataTable({
        'language': {
            'url': '//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
        },
        "scrollX": true
    });
});