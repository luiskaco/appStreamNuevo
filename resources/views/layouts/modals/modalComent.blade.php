  <!-- Modal Upload -->
  <div class="modal fade" id="commentId" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Comentarios de Publicación</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"  style="overflow-y: scroll; scroll-behavior: smooth; height:300px;" id="cmID">

        </div>
         <div class="modal-footer m-footer-flex">
                <form class="form ">
                        <textarea  name="desc" rows="1"  name="comentarios" placeholder="Dime que piensas" required value="" id="commentModalArea" data-id="" ></textarea>
                        {{-- <button type="submit" class="btn btn-primary" id="commentModalBtn">
                            Enviar
                        </button> --}}
                        <div class="btnCommentCss">
                            <a class="btnModalCommentar"  id="commentModalBtn" data-id="" onclick="btnSubmit(event)">
                                <img src="{{'/img/enviar.png'}}" alt="imagen" />
                            </a>
                        <div>
                </form>

            </div>
        </div>
    </div>
</div>


