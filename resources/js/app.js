/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');

require('./bootstrap');

require('datatables.net-bs4');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('enviar-component', require('./components/EnviarMsnsaje.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

// botn
const btnSInput = document.querySelectorAll(".bgInput");

btnSInput.forEach((enlace, index) => {
    enlace.addEventListener('input', e => {

        const id= enlace.getAttribute("data-id");

        if(id) {
            if(id == 1){

                if(document.querySelector('body').classList.contains('bg02')){
                    document.querySelector('body').classList.remove('bg02')
                }

                if(document.querySelector('body').classList.contains('bg03')){
                    document.querySelector('body').classList.remove('bg03')
                }
                document.querySelector('body').classList.add('bg01')


            } else if(id == 2){

                if(document.querySelector('body').classList.contains('bg01')){
                    document.querySelector('body').classList.remove('bg01')
                }

                if(document.querySelector('body').classList.contains('bg03')){
                    document.querySelector('body').classList.remove('bg03')
                }
                document.querySelector('body').classList.add('bg02')

            }else{
                if(document.querySelector('body').classList.contains('bg01')){
                    document.querySelector('body').classList.remove('bg01')
                }

                if(document.querySelector('body').classList.contains('bg02')){
                    document.querySelector('body').classList.remove('bg02')
                }
                document.querySelector('body').classList.add('bg03')

            }
        }

    });

});







// function getUserCount(){
//     const pathUser = document.getElementById('getPathUser').value

//     axios.post(pathUser)
//     .then(respuesta => {
//         const rspnaResul = document.getElementById('userCount');
//               rspnaResul.textContent = parseInt(respuesta.data)

//     });
// }

function getUserCountLine(){
    const PathUserLine = document.getElementById('getPathUserLine').value

    axios.post(PathUserLine)
    .then(respuesta => {
        const rspnaResul = document.getElementById('userCountLine');
              rspnaResul.innerHTML = ` <p>${parseInt(respuesta.data)}</p>`

    });
}

/** PRIMERA VEZ*/

getUserCountLine();

const selectGroup = document.getElementById('selectGroup')
    selectGroup.addEventListener('change', e => {

    let selectID = e.target.value;
    let pathRoute = document.getElementById('getPathTable').value
    let pathNew = `${pathRoute}/${selectID}`;

         otable.destroy();
         otable.ajax.reload( null, false );

         tableUser(pathNew);
});


/** END* */

/** CRONOMETRADO**/
setInterval(() => {
    getUserCountLine();


}, 60000);
/** END */

// llmado de table
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





