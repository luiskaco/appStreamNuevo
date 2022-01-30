
    <style>

        .main{
            height: calc(100vh - 87px);
        }

        .custom-container-full{
            height: 100vh;
            MAX-WIDTH: 1100PX;
            margin: auto;
            display: flex;
            align-items: center;
        }

        .container-evento{
                    padding:  0;
                }

          .custom-button-photo{
              background: #ffa300;
              border: unset;
              color: white;
          }
          .row{
                margin: 0 !important;
            }

          .container-title-button{
            justify-content: space-between;
            border-bottom: 2px solid white;
            margin: 0 0 20px 0 !important;
            padding: 0;
          }

          .container-video{
              padding: 0;
          }
          .container-button-encuesta{
                display: flex;
                align-items: center;
            }

          .custom-button-encuesta{
                background: #E40571;
                margin: auto;
                border: unset;
            }

            .btn{
                padding: 8px 24px;
            }

            .custom-button-encuesta:hover{
                background: #C90162 !important;
            }

            .custom-button-encuesta:active{
                background: #FF027D !important;
            }

            .btn:focus{
                box-shadow: none;
            }

            .container-chat-video{
                border-radius: 9px;
                background: white;
                height: 100%;
                min-height: 300px;
                width: 100%;
            }

            /* MODAL AGENDA */
            .modal-content{
                border: 12px solid white;
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
                color: white !important;
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

             /*FIN  MODAL AGENDA */
             /* MODAL SOPORTE */
             .modal-backdrop {
                position: unset;
             }

             .close-soporte{
                color: #7e7d7d !important;
                position: absolute;
                right: 0;
             }

             .container-button-whatsapp{
                text-align: center;
                padding: 20px 0 0;
             }

             /* FIN MODAL SOPORTE */

             /* INICIO FOOTER */


             .container-image-financiera{
                width: 70%;
                display: flex;
                justify-content: end;
                align-items: end;
             }

             .container-image-financiera img{
                background-repeat: no-repeat;
                background-size: contain;
                width: 170px;
                height: 65px;
            }


             /* FIN FOOTER */


          @media (min-width: 320px){


            .modal-dialog{
                max-width: 600px;
            }
            .modal{
                padding: 0;
            }

              .container-title-button {
                text-align: center !important;
                justify-content: center !important;
            }

            /* .container-evento{
                    padding: 80px 0;
                } */

                .container-chat-video{
                    padding-top: 30px;
                }


            .container-video iframe{
                min-height: 170px;
            }

            .custom-container-full{
            height: auto;
            }

            .custom-button-encuesta{
                margin: unset;
            }



            .container-item-agenda-horario div{
                background: whitesmoke;
                border-radius: 5px;
                padding: 5px 15px ;
            }

            /* INICIO MODAL SOPORTE */

            .detalle-soporte{
                font-size: 14px;
                TEXT-ALIGN: JUSTIFY;
            }

            /* FIN MODAL SOPORTE */



          }



            @media (min-width: 375px){



            .custom-container-full{
            height: auto;
            }


            .container-video iframe{
            min-height: 200px;
            }



            footer, .container-footer{
                position: unset;
            }

            }

            @media (min-width: 768px){
                .container-video iframe {
                min-height: 240px;
            }

                /* .custom-container-full{
                height: 100vh;
                } */

                .custom-button-encuesta{
                margin: auto;
            }

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

            /* INICIO MODAL SOPORTE */

            .detalle-soporte{
                font-size: 16px;
                TEXT-ALIGN: LEFT;
            }

            /* FIN MODAL SOPORTE */



            /* INICIO FOOTER */

            footer{
                position: absolute;
                z-index: 1;
                width: 100%;
                bottom: 120px;
             }


             .container-footer{
                display: flex;
                position: absolute;
                width: 100%;
                height: 120px;
                display: flex;
                justify-content: end;

             }

            }

            @media (min-width: 1024px){
                .container-video iframe {
                min-height: 330px;
            }

            .container-title-button {
                justify-content: space-between !important;
            }

        }


    </style>
