
    <style>

        .main{
            /* height: calc(100vh - 87px); */
            height: auto;
            padding-top: 30px;
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
                z-index: 1;
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
                max-height: 600px;
            }


        #messagesDiv{
            overflow-y: auto;
            overflow-x: hidden;
            height: 92%;
            width: 100%;
        }
        #chatescribe{
            position: absolute;
            bottom: 0;
            width:90%;

        }

        .msjeuser{
            text-align: left !important;
            color: #83786F;
            font-size: 16px;
        }


          @media (min-width: 320px){

            .modal{
                padding: 0;
            }

              .container-title-button {
                text-align: center !important;
                justify-content: center !important;
            }

            .container-button-encuesta {
                padding-top: 50px !important;
            }



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

            .container-chat-video {
                margin-top: 35px;
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


            }

            @media (min-width: 768px){
                .container-video iframe {
                min-height: 240px;
            }


                .custom-button-encuesta{
                margin: auto;
            }

            .container-button-encuesta {
                padding-top: 0px !important;
            }



            /* INICIO MODAL SOPORTE */

            .detalle-soporte{
                font-size: 16px;
                text-align: left;
            }

            /* FIN MODAL SOPORTE */


            }

            @media (min-width: 1024px){
                .container-video iframe {
                min-height: 330px;
            }

            .container-title-button {
                justify-content: space-between !important;
            }

            .container-chat-video {
                z-index: 1;
                margin-top: 0;
            }

        }

        @media (min-width: 48em) {
            #messagesDiv{

                overflow-y: auto;
                overflow-x: hidden;
                height: 92%;
                width: 100%;
            }
            #chatescribe{
                position: absolute;
                bottom: 0;
                width:90%;

            }
            .msjeuser{
                text-align: left !important;
                color:#83786F;
                font-size:18px
            }
        }


    </style>
