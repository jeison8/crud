
/* VARIABLES */

/* FUNCIONES */
function eliminarPlan(plan_id) {

    var confirmacion = confirm("Desea eleminar este regitro?");

    if (confirmacion) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/planes/' + plan_id,
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

    $('#planes').DataTable({
        'language': {
            'url': '//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
        },
        "scrollX": true
    });

});