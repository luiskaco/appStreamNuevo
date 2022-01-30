
    Dropzone.autoDiscover = false;// Evitamos que dropzone escanee buscando estanciar la clase dropzone
    document.addEventListener('DOMContentLoaded', () => {

     // Dropzone
    const dropzoneDevjobs = new Dropzone('#dropzonePhoto',{
        url: "/evento/galeria/uploadPhoto", // Ruta destino | Debe colocrse comillas dobles
        dictDefaultMessage: "Añadir foto", // Cambiar nombre del input
        acceptedFiles:".png, .jpg , .jpeg ", // Validar formato
        addRemoveLinks: true, // Agregar boton de eliminar
        dictRemoveFile: 'Borrar Archivo',  // Cambiar nombre del boton borrar
        maxFilesize: 2, // Mb
        maxFiles: 1, // Definir la carga de 1  | importante para que funcione el metodo  maxfilexxecc y remove file
        uploadMultiple:false,
        headers:{
            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
        },
        init: function(){
            // Se ejecuta cuando incia el dropzone
            // console.log("init de dropzone")
            // Revisar si el value de imagen esta vacio
            if(document.querySelector('#imagen').value.trim()){
              let imagenPublicada = {};
              imagenPublicada.size = 1234;
              imagenPublicada.name = document.querySelector('#imagen').value;

                // Obtner imagen Para publicar nuevamente en dropzone
                this.options.addedfile.call(this, imagenPublicada);
                this.options.thumbnail.call(this, imagenPublicada, `/storage/fotos/${imagenPublicada.name}`);

                // Agregas clases necesaria apra el publicao
                imagenPublicada.previewElement.classList.add('dz-sucess');
                imagenPublicada.previewElement.classList.add('dz-complete');

            }

            this.processQueue();
            this.on("maxfilesexceeded", function(file){
                    Swal.fire({
                        icon: 'info',
                        title: 'Observaciónl!!!',
                        text: 'Solo se permite cargar un archivo',

                    })
            });

        },
        success: function (file, response){
            //  console.log(file);  // Informacion del archvio
            // console.log(response);  // informacion de la respuesta

            document.querySelector('#error').textContent = '';

            // Coloca la respuesta del servidor
            document.querySelector('#imagen').value=response.correcto;

            // Añadir al objeto de archvo el nombre del servidor
            file.nombreServidor = response.correcto;
        },
        maxfilesexceeded: function(file) { // Se ejcuta cuando esten todos los archivos


            if(file.status == 'error'){
                this.removeAllFiles();

            }else{
                this.removeAllFiles();
                this.addFile(file);
            }



        },
        removedfile: async function(file, response) {

                // Evitamos que elimine el archivo
                if(document.getElementById('imagen').value==""){

                    file.previewElement.parentNode.removeChild(file.previewElement);

                }else{

                    file.previewElement.parentNode.removeChild(file.previewElement);

                    params = {
                        imagen: file.nombreServidor ?? document.querySelector('#imagen').value
                        // Si no encuentra la  enviada antes de la validacion, busca la de la respuesta de validacion
                    }
                    // console.log(params)
                    await axios.post('/evento/galeria/drophoto', params )
                        .then(respuesta => console.log(respuesta))
                }


            }
         });

         const form = document.getElementById('btn-click');
         form.addEventListener('click', sendForm);

        async function sendForm(e){
                e.preventDefault();

                let flag=0;
                const imagen = document.getElementById('imagen').value;
                const desc = document.getElementById('desc').value


                if(imagen.trim() == ''){
                    document.getElementById('img-error').classList.remove('bk-h');

                }else{
                    document.getElementById('img-error').classList.add('bk-h');
                    flag += 1;
                }

                if(desc.trim() == ''){
                    document.getElementById('desc-error').classList.remove('bk-h');

                }else{
                    document.getElementById('desc-error').classList.add('bk-h');
                    flag += 1;
                }

                setTimeout(() => {
                    document.getElementById('img-error').classList.add('bk-h');
                    document.getElementById('desc-error').classList.add('bk-h');
                }, 3000);

                if(flag>1){

                    let params = {
                        imagen,
                        desc
                    }

                   const resultado = await axios.post('/evento/galeria', params )
                    //    console.log(resultado);

                   // Limpiando
                    document.getElementById('imagen').value = "";
                    document.getElementById('desc').value = "";

                    Dropzone.forElement('#dropzonePhoto').removeAllFiles(true)

                    document.getElementById('modalClose').click();

                    Swal.fire({
                            icon: 'success',
                            title: 'Genial!!!',
                            text: 'Se ha subido correctamente',
                            footer: '<a href="/evento/galeria">Puede ver su publicación en este enlace</a>'
                        })
                }
         }
    });
