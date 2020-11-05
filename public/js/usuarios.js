/* FUNCTIONES */

//Función que permite mostrar la imagen en inputs file
function readURL(input, id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

//ajax que permite cambiar el estado del usuario a inactivo
function inactivarUsuario(usuario_id) {

    var confirmacion = confirm("Desea deactivar este regitro?");

    if (confirmacion) {
        //token de peticion que se encuentra en los meta del index
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/usuarios/' + usuario_id,
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

    /* file input image foto*/
    $("#foto").change(function () {
        var id = '#imagenFoto';
        readURL(this, id);
    });

    /* file input image firma*/
    $("#firma").change(function () {
        var id = '#imagenFirma';
        readURL(this, id);
    });

    $('#usuarios').DataTable({
        'language': {
            'url': '//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
        },
        "scrollX": true
    });
});