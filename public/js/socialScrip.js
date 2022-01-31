
// ajaxID

document.addEventListener('DOMContentLoaded', () => {
    setInterval( () => { cardAjax() }, 300000);

    cardAjax()

}); // no borrar


function btnSubmit (event){
    const btnModal = document.getElementById('commentModalBtn')
    const id = btnModal.getAttribute('data-id')

    const commentModal = document.getElementById('commentModalArea')
    if(commentModal.value.trim() != ""  &&  id != ""){

        const vArea = commentModal.value;

        params= {
            id,
            value: vArea
        }

        comentaryStore(params);

        // Recargamos
        comentaryReload({
            id
        });

        // Limpiamos
        commentModal.value = ""
    }else{
        SweetMsg('error', "ups!!", "Debe escribir un comentario",'', 1200)
    }
}


function btnCommentary(id) {

// Recargamos
comentaryReload({
        id
});

const btnModal = document.getElementById('commentModalBtn')
btnModal.setAttribute('data-id',  id)
}

function btnLike (id){

params= {
    id
}

const like = document.getElementById(`fa-${id}`)

if(like.classList.contains('fa-heart-o')){
    like.classList.remove('fa-heart-o')
    like.classList.add('fa-heart')
}else{
    like.classList.remove('fa-heart')
    like.classList.add('fa-heart-o')
}

axios.post('/evento/galeria/likeStore', params )
.then(respuesta => {
        document.getElementById(`count-${id}`).innerText = respuesta.data.like
    });
}

// Peticioens Ajax

// Only Comentarios
function comentaryStore(params){
const {id} = params;

axios.post('/evento/galeria/commentStore', params )
.then(respuesta => {
    // console.log(respuesta)
    if(!respuesta.error){
        SweetMsg('success', "Genial!!", "Se ha registrado tu comentario",'', 1200)

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

            // console.log(element)

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

function card(data){

let fragment = '';

data.forEach(element => {

fragment+=
        `<div class='instagram-card'>
            <div class='instagram-card-header'>
                <span class='instagram-card-user-name'>${element.name}</span>
            </div>
            <div class='instagram-card-image'>
                <img src='${element.url}' alt='imagen-${element.id}' width="500" height="250"/>
                <div class='instagram-card-content'>
                <p class='card-description'>${element.commentary}</p>
                </div>
            </div>
            <div class='instagram-card-footer'>
                <p class='likes' id = heart>
                    <a class='action-icon-liked btnCheckLike' onclick="btnLike(${element.id})"  data-id='${element.id}' >
                        <i class='fa ${element.likeCheck}' id='fa-${element.id}'>
                        </i>
                    </a>
                    <span id='count-${element.id}'>${element.like}</span> Me gusta</p>

                <a class='linkComentario btnSearchComment'
                    data-toggle='modal'
                    data-target='#commentId'
                    data-id='${element.id}'
                    onclick="btnCommentary(${element.id})"
                >
                        <img src='/img/enviar.png' alt='imagen-${element.id}' />
                </a>
            </div>
        </div>`;
    })

return fragment;

}

function cardAjax () {

    params = {
        id: document.getElementById('groupID').value
    }

    axios.post('/evento/galeria/cardList', params )
    .then(respuesta => {
    const {data, html} = respuesta.data;
            document.getElementById('desct').innerHTML = card(data);

            // SweetMsg('success', "Genial!!", "Se ha registrado tu comentario",'', 1200)
    });

}

function SweetMsg(type, title, text, footer = '', time=0){
    Swal.fire({
        icon: type,
        title: title,
        text: text,
        timer: time,
        footer: `<a href="">${footer}</a>`
    })
}

