<style>
    /* MODAL AGENDA */
            .modal-content{
                padding: 10px;
                border-radius: 5px;
            }

            .modal-header{
                padding: 0 0 15px 0;
                border: unset;
            }

            .modal-content-agenda{
                background-image: url(https://encuentrodelideres.travesia2022.com/assets/images/backgrounds/login-bg.png);
                background-repeat: no-repeat;
                background-size: cover;
                border-radius: 5px;
                padding: 15px;
            }

            .modal-body{
                border-radius: 5px;
                background: white;
            }

            .container-title-agenda{
                background: #e40571;
                color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 5px;
                padding: 5PX 10PX;
            }

            .close{
                font-size: 40px;
                opacity: revert;
            }

            .close:focus{
                outline: none !important;
            }

            .container-item-agenda-horario {
                grid-template-columns: 1fr;
                text-align: center;
                background: whitesmoke;
                margin: 10px 0;
                border-radius: 5px
            }

            @media (min-width: 768px){
            .container-item-agenda-horario{
                display: grid;
                grid-template-columns: 40% 60%;
                justify-content: center;
                grid-gap: 10px;
                padding: 7px 0;
                background: transparent;
                margin: 0;
                border-radius: 0;
            }

        }


        @media (min-width: 320px){
            .modal-dialog {
                max-width: 600px;
            }
            .container-item-agenda-horario div{
                background: whitesmoke;
                border-radius: 5px;
                padding: 5px 15px ;
            }
        }

    /*FIN  MODAL AGENDA */
</style>

<!-- INICIO MODAL AGENDA -->
<div class="modal fade show" id="modalAgenda">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-content-agenda">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title font-weight-normal text-white custom-form-title">Agenda</h4>
                    <button style="color: white !important;" type="button" class="close" data-dismiss="modal">×</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container-title-agenda">
                            <span>Actividades</span>
                        </div>
                        <div class="container-agenda-horarios">
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    8:00 a 8:30
                                </div>
                                <div class="detalle-agenda">
                                    Actividad espiritual
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    8:30 a 9:35
                                </div>
                                <div class="detalle-agenda">
                                    Inicio del evento Primer bloque de plenarias
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    9:35 a 9:45
                                </div>
                                <div class="detalle-agenda">
                                    Break
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    9:45 a 9:55
                                </div>
                                <div class="detalle-agenda">
                                    Primera dinámica
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    9:55 a 10:45
                                </div>
                                <div class="detalle-agenda">
                                    Segundo bloque de plenarias
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    10:45 a 11:15
                                </div>
                                <div class="detalle-agenda">
                                    Conversatorio con nuestros líderes
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    11:15 a 11:25
                                </div>
                                <div class="detalle-agenda">
                                    Segunda dinámica
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    11:25 a 11:40
                                </div>
                                <div class="detalle-agenda">
                                    Acto simbólico
                                </div>
                            </div>
                            <div class="container-item-agenda-horario">
                                <div class="hora-agenda">
                                    11:40 a 11:45
                                </div>
                                <div class="detalle-agenda">
                                    Cierre
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>

<!-- FIN MODAL AGENDA -->
