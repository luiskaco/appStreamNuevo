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

const pathname = window.location.pathname;

switch (pathname) {
    case '/evento/admin':
        //  console.log("estas en admin index")
         require('./admin');

        break;
    case '/evento/admin/uploadVideo':
        //  console.log("estas en upload video")

        break;
    case '/evento/admin/listImage':
        // console.log("estas en lista video")
          require('./listImage');

        break;
    case '/evento/home':



        break;
    default:
        console.log('Ningun cambio');
}




// bg dinamos de registro
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


