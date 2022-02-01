<!-- Modal Permiso  -->
<div class="modal fade" id="permitaccep_id" tabindex="-1"
role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold text-pink headingPermit">CONSENTIMIENTO DE DATOS PERSONALES</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="contentPermitGrid">
                    <embed src="{{asset('/pdf/terminos.pdf')}}"
                    type="application/pdf">
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary custom-button" data-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>

    <style>
        .headingPermit {
            font-size: 1rem;
            font-weight: 800;
            font-family: Arial, Helvetica, sans-serif;
        }

        .contentPermitGrid{
            display: grid;
            grid-template-columns: 1fr;
        }

        embed{
            width: 100% !important;
            height: 300px;
        }

        /* .modal.in .modal-dialog {
            transform: none; /*translate(0px, 0px);*/
        } */
    </style>






