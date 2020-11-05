
/* VARIABLES */


/* FUNCIONES */
function eliminarEntidad(entidad_id) {

    var confirmacion = confirm("Desea eleminar este regitro?");

    if (confirmacion) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url: '/admin/entidades/' + entidad_id,
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

function readURL(input, id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $(id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function dataTables(){
    $('#entidades').DataTable({
        processing: true,
        serverSide: true,
       /*  language: {
            url:'//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json'
        }, */
        ajax: 'entidades',
        columns: [
                 { data: 'nombre', name: 'nombre' },
                 { data: 'codigo_eps', name: 'codigo_eps' },
                 { data: 'telefono', name: 'telefono' },
                 { data: 'direccion', name: 'direccion' },
                 {data: 'action', name: 'action', orderable: false}
              ]
     });
}

/* READY */
$(function () {

     $("#logo").change(function () {
        var id = '#imagenLogo';
        readURL(this, id);
    });   

    dataTables();

});