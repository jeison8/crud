/* VARIABLES */

/* FUNCTIONES */
function readURL(input, id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function inactivarUsuario(prestador_id) {

    var confirmacion = confirm("Desea deactivar este regitro?");

    if (confirmacion) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/prestadores/' + prestador_id,
            type: 'delete',
            success: function (response) {z
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

    $("#logo").change(function () {
        var id = '#imagenLogo';
        readURL(this, id);
    });

    $('#prestadores').DataTable({
        'language': {
            'url': '//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
        },
        "scrollX": true
    });

});