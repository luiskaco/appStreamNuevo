

// invocamos tabla la primera vez
tableUser();

 $(document).on('click', '#listID', function(e) {
        const id = e.target.getAttribute('data-id')

        pathRoute = document.getElementById('getPathDelete').value

        param = {
            id
        }

            Swal.fire({
                title: '¿Estas seguro de eliminar?',
                text: "Recuerda que estos cambios son irreversibles",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminalo!'
                }).then((result) => {
                        if (result.isConfirmed) {
                                Swal.fire(
                                    'Eliminado!',
                                    'Fue realizada correctamente la operación.',
                                    'success'
                                )

                                 axios.post(pathRoute,  param)
                                .then(respuesta => {
                                    // console.log(respuesta)
                                        otable2.destroy();
                                        otable2.ajax.reload( null, false );

                                        tableUser();
                                });

                                
                        }
                })
  });

function tableUser (pathUser = null) {
    let pathRoute ;

        pathRoute = document.getElementById('getPathTableImage').value
  

    otable2 = $('#tableImage').DataTable(
        {
            responsive: true,
            processing: true,
              serverSide: true,
              ajax:{
                  url: pathRoute,
                  type:'get',
                } ,
                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },

                columns: [
                    {data: 'id', name:'id','orderable': false},
                    {data: 'name', name:'name'},
                    {data: 'dni', name:'dni'},
                    {data: 'group2', name:'group2'},
                    {data: 'path', name:'path'},
                    {data: 'action', name:'action'},
                ],

                 bAutoWidth: false,
                  order: [[0, "desc"]],
                  "aaSorting": [],

          }
    );
}