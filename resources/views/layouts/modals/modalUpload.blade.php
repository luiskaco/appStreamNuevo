 
  

  
  <!-- Modal Upload -->
  <div class="modal fade" id="upload_id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title font-weight-bold text-black mx-auto" id="exampleModalLabel">
            Comparte tu historia
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('galeria.store')}}" method="post" id="formUpload">
                @csrf

                <div class="form-group">
                    <label for="dropzonePhoto" class="text-white">Cargar Imagen</label>
                    <div id="dropzonePhoto" class="dropzone rounded bgGray100">
                    
                    </div>
                    <span class="msgFormat">Formatos Permitidos: JPG, JPEG, PNG 1200 x 720 pixeles. Peso máximo 2MB por imagen</span>
                    {{-- input para guardar el nombre en Wla BD --}}
                    <input type="hidden" required name="imagen" id="imagen" value="{{old('imagen')}}">

                    {{-- mensaje de error --}}
                    <p id="error">
                    </p>

                    <div role="alert" class="alert bk-h" id="img-error">
                        <p> Este campo es requerido</p>
                    </div>

                </div>
                <div class="form-group">
                    <label for="desc" class="text-white">Descripción</label>
                    <textarea required class="form-control" id="desc" name="desc" rows="3" placeholder="Agrega un comentarios"></textarea>

                    <div role="alert" class="alert bk-h" id="desc-error">
                        <p> Este campo es requerido</p>
                    </div>
                </div>

           </form>
        </div>
        <div class="modal-footer text-center">
            <button type="button" class="btn btn-primary btn-lg custom-button" id="btn-click">Subir imagen</button>
            <button type="button" class="btn btn-secondary custom-button" data-dismiss="modal" id="modalClose" style="display:none;" >Cerrar</button>
        </div>
      </div>
    </div>
  </div>

