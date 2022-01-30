/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');

require('./bootstrap');

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


// ajaxID

window.onload = function() {

};

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


// BOTON LIKE
const btnLike = document.querySelectorAll('.btnCheckLike')

btnLike.forEach((enlace, index) => {
    enlace.addEventListener('click', e => {
        const imageID= enlace.getAttribute("data-id");

        // console.log(enlace.firstChild.classList.contains('fa-heart-o'))

        if(enlace.firstChild.classList.contains('fa-heart-o')){
            enlace.firstChild.classList.remove('fa-heart-o')
            enlace.firstChild.classList.add('fa-heart')
        }else{
            enlace.firstChild.classList.remove('fa-heart')
            enlace.firstChild.classList.add('fa-heart-o')
        }

        params= {
            id: imageID
        }

        axios.post('/evento/galeria/likeStore', params )
        .then(respuesta => {
                console.log(respuesta.data.like)
                document.getElementById(`count-${imageID}`).innerText = respuesta.data.like
         });
    });
});


/// Comentariosd
const btnModalSubmit = document.getElementById('commentModalBtn')

    btnModalSubmit.addEventListener('click', e => {
    e.preventDefault();

    const commentModal = document.getElementById('commentModalArea')
        if(commentModal.value.trim() != ""){

            const imageID = commentModal.getAttribute('data-id')
            const vArea = commentModal.value;

            params= {
                id: imageID,
                value: vArea
            }

            paramsR= {
                id: imageID
            }

            comentaryStore(params);

            // Recargamos
            comentaryReload({
                id: imageID
            });

            // Limpiamos
            commentModal.value = ""
        }
});

const btnSubmit = document.querySelectorAll(".btnClickComment");

btnSubmit.forEach((enlace, index) => {
        enlace.addEventListener('click', e => {
            e.preventDefault();
            const imageID= enlace.getAttribute("data-id");
            // const query = document.getElementById(`input-${imageID}`);
             const query = document.getElementById(`input-${imageID}`);

            if(query.value.trim() ==''){
                console.log("No puede quedar vacio")
                document.querySelector(`.error-${imageID}`).classList.remove('errorInput')

                setTimeout(() => {
                    document.querySelector(`.error-${imageID}`).classList.add('errorInput')
                }, 3000)
                return ;
            }

            params= {
                id: imageID,
                value: query.value
            }

            query.value=""
            comentaryStore(params);

        });
});

// consultar

const btnclick = document.querySelectorAll(".btnSearchComment");

btnclick.forEach((enlace, index) => {
enlace.addEventListener('click', () => {
    const imageID= enlace.getAttribute("data-id");

    // add a botom modal el id de la iamgen
    document.getElementById('commentModalArea').setAttribute('data-id', imageID)

    params = {
        id:imageID
    }

    comentaryReload(params);
})
})

// Peticioens Ajax

// Only Comentarios
function comentaryStore(params){
    const {id} = params;

    axios.post('/evento/galeria/commentStore', params )
    .then(respuesta => {
            // console.log(respuesta)
            if(!respuesta.error){
                SweetMsg('success', "Genial!!", "Se ha registrado tu comentario",'', 1200)
                document.getElementById(`countComentaryID-${id}`).innerText = respuesta.data.commentary;

            }else{
                SweetMsg('error', "Ups!!!", "Comuniquese con el administrador del sitio",'', 1200)
            }
     });
}

function comentaryReload(params){
    axios.post('/evento/galeria/queryComment', params )
    .then(respuesta => {
            // console.log(respuesta)
            const modalBody = document.getElementById('cmID');
            let fragment = '';

            modalBody.innerHTML = ''

            if(respuesta.data.error){

                return;
            }
                respuesta.data[0].forEach(element => {

                    const {desc, created_at, user_link} = element[0]

                    console.log(element)

                    fragment += `
                        <div class="comment_Content">
                            <div class="comment_head">
                                <span>
                                    ${user_link.name}
                                </span>
                            <div>
                            <div class="comment_body">
                                <p>
                                    ${desc}
                                </p>
                            <div>
                        </div>`;
                });

                modalBody.innerHTML = fragment

    })
}

//  SweetMsg('error', "Ups!!", "Tenemos un problema")

function SweetMsg(type, title, text, footer = '', time=0){
    Swal.fire({
        icon: type,
        title: title,
        text: text,
        timer: time,
        footer: `<a href="">${footer}</a>`
      })
}



