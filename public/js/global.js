/* VARIABLES */
var urlDatatable = '//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json';

/* funciones */
function traerMunicipios() {
    $('#municipio_id').children().remove();
    
    var departamento_id = $('#departamento_id').val();
    
    //token de peticion que se encuentra en los meta del index
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        data: { 'departamento_id': departamento_id },
        url: '/admin/getMunicipioByDepartamentId',
        type: 'post',
        success: function (response) {
            $("#municipio_id").append('<option value="">Seleccionar...</option>');
            $.each(response.data, function (key, municipio) {
                
                $("#municipio_id").append(
                    '<option value=' + municipio.id + '>' + municipio.nombre + '</option>'
                );
            });
        },
        error: function (err) {
            console.log(err);
        }
    });
}

//agregar clase activa
function addActiveClass() {
    var url = window.location;
    // Will only work if string in href matches with location
    $('.treeview-menu li a[href="' + url + '"]').parent().addClass('active');
    // Will also work for relative and absolute hrefs
    $('.treeview-menu li a').filter(function () {
        return this.href == url;
    }).parent().parent().parent().addClass('active');
}

function departamentoClick() {

    //función que permite traer los municipios por departamento id
    $('#departamento_id').on('change', function () {
        
        traerMunicipios();
    });
}

function select2inputs() {
    /* selec2 */
    $('.select2').select2()
}


/* ready */
$(function () {

    departamentoClick();
    addActiveClass();
    select2inputs();


});