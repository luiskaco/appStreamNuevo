

// Select de grupos
const selectGroup = document.getElementById('selectGroup')
    selectGroup.addEventListener('change', e => {

    let selectID = e.target.value;
    // obtenemos la ruta de la table
    let pathRoute = document.getElementById('getPathTable').value
    // Armamos la ruta para lo grupos en el data table
    let pathNew = `${pathRoute}/${selectID}`;

    // ASigamos el grupo para el excel
    document.getElementById('groupExcelID').value = selectID

        // Reiniciamos el datatable
         otable.destroy();
         otable.ajax.reload( null, false );

         // Invocamos la tabla nuevamentes
         tableUser(pathNew);
});


/** CRONOMETRADO**/
setInterval(() => {
    // Consultamos usuarios en linea
    getUserCountLine();
    reloadDinamic();

}, 30000);
/** END */

// Consultamos usuarmo la primera vez
getUserCountLine();

// invocamos tabla la primera vez
tableUser();


function tableUser (pathUser = null) {
    let pathRoute ;

    if(pathUser !== null){
        pathRoute = pathUser;
    }else{
        pathRoute = document.getElementById('getPathTable').value
    }

    otable = $('#tableUsers').DataTable(
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
                    {data: 'agency', name:'agency'},
                    {data: 'group', name:'group'},
                    {data: 'line', name:'line'},
                    {data: 'status', name:'status'},
                    {data: 'action', name:'action'},
                ],

                 bAutoWidth: false,
                  order: [[0, "desc"]],
                  "aaSorting": [],

          }
    );
}

function reloadDinamic () {
      // Reiniciamos el datatable
      otable.destroy();
      otable.ajax.reload( null, false );

      tableUser();
}


// Ajax de usuario en linea
function getUserCountLine(){
    const PathUserLine = document.getElementById('getPathUserLine').value

    axios.post(PathUserLine)
    .then(respuesta => {
        const rspnaResul = document.getElementById('userCountLine');
              rspnaResul.innerHTML = ` <p>${parseInt(respuesta.data)}</p>`

    });
}


