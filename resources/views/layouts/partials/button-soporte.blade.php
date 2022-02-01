<style>
    .close-soporte{
        display: none
    }

    .modal-open .modal {
        background: #0000007a;
    }

    .custom-button-soporte{
        background: white;
        color: #e40571 !important;
        text-transform: uppercase;
        padding: 14px;
    }

    .custom-button-soporte:after{
        content: "";
        width: 100%;
        height: 22px;
        background: white;
        position: absolute;
        bottom: 0;
        left: 0;
        top: -10px;
        border-radius: 50%;
    }

    /* MODAL SOPORTE */


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

    .custom-button-soporte svg{
        transform: rotate(90deg);
    }

    .container-button-soporte{
        position: fixed;
        right: -90px;
        top: 50%;
        bottom: 0;
        transform: rotate(-90deg);
        height: fit-content;
        /* background: url("{{ url('img/button-back-soporte.png') }}") */
    }

    @media screen and (max-width: 550px) {
        .container-button-soporte {
            position: fixed;
            right: 20px;
            top: unset;
            border-radius: 50%;
            bottom: 80px;
            transform: rotate(90deg);
        }

        .custom-button-soporte{
            font-size: 0;
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: #ffffff;
            padding: 0;
        }
        .custom-button-soporte svg{
            transform: unset;
        }
        .custom-button-soporte:after{
            position: unset;
        }

        .container-button-whatsapp a{
            padding: 10px 15px;
        }

        .close-soporte {
            color: #7e7d7d !important;
            display: block;
            margin: -30px -10px 0 0 !important;
        }

    }

</style>

<div class="container-button-soporte">
    <button type="button" class="btn  custom-button-soporte font-weight-bold text-white" data-toggle="modal"
     data-target="#modalSoporte">
        Asistente de Soporte
        <svg width="31" height="27" viewBox="0 0 31 27" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.6855 10.3285L27.6855 10.3286L27.6854 10.3287C27.639 10.603 27.5926 10.8772 27.5202 11.1443C26.7573 13.9085 25.0151 15.7502 22.2935 16.6696C22.1503 16.7166 22.0836 16.7636 22.0714 16.9303C21.9801 18.3114 21.5806 19.6545 20.9022 20.861C20.851 20.952 20.8552 21.099 20.8853 21.2065C21.1358 22.1293 21.3906 23.051 21.6453 23.9725L21.6454 23.9729C21.7679 24.4158 21.8903 24.8587 22.0122 25.3016C22.0189 25.3256 22.0238 25.35 22.03 25.3807L22.03 25.3809C22.0334 25.3976 22.0372 25.4163 22.0418 25.4378C21.988 25.4353 21.9345 25.4288 21.8817 25.4185C21.5279 25.3206 21.1741 25.223 20.8204 25.1253L20.8201 25.1252C19.8164 24.8481 18.813 24.5711 17.8111 24.2892C17.7389 24.2661 17.6626 24.2588 17.5874 24.2679C17.5122 24.277 17.4399 24.3022 17.3753 24.3418C15.591 25.3251 13.6855 25.6913 11.6654 25.4058C9.84955 25.1559 8.15043 24.3668 6.78778 23.1408C5.42514 21.9148 4.46165 20.3081 4.02193 18.5286C2.76821 13.501 5.99409 8.39128 11.0762 7.36013C11.4875 7.27701 11.9073 7.23053 12.3252 7.18639C12.4708 7.1709 12.5332 7.12957 12.5797 6.98495C13.2803 4.79538 14.6758 3.20591 16.747 2.21467C17.5074 1.85021 18.3263 1.62319 19.1657 1.54414C19.2182 1.53413 19.2696 1.51936 19.3193 1.5L20.6782 1.5C20.7206 1.51829 20.7649 1.53215 20.8101 1.54133C21.8798 1.64369 22.8762 1.97708 23.8153 2.49078C23.9173 2.53634 24.032 2.5453 24.1398 2.51614C24.6257 2.38717 25.1097 2.25138 25.5938 2.11558C25.8059 2.05608 26.018 1.99657 26.2303 1.93763C26.5664 1.84454 26.9032 1.75303 27.2499 1.65885L27.7113 1.53334C27.7061 1.56127 27.7022 1.58479 27.6988 1.60539C27.6925 1.64297 27.6879 1.67085 27.6803 1.69815L27.496 2.36503C27.247 3.26694 26.9979 4.16879 26.744 5.06913C26.6994 5.22832 26.7017 5.35651 26.7886 5.5063C27.141 6.12175 27.3991 6.78651 27.5545 7.47846C27.6118 7.72667 27.6536 7.97842 27.6955 8.23007C27.7146 8.34545 27.7338 8.46082 27.7545 8.57581L27.755 9.93566C27.7299 10.0661 27.7077 10.1974 27.6855 10.3285ZM20.0236 23.4337C19.9632 23.2136 19.9039 22.9956 19.845 22.7793C19.6835 22.1856 19.5254 21.6044 19.3564 21.0262C19.3 20.8337 19.3292 20.6947 19.4334 20.5299C20.5439 18.7799 20.9106 16.8781 20.5294 14.8435C19.7471 10.6743 15.6182 7.90576 11.4246 8.72515C6.89799 9.60933 4.11866 14.3186 5.54049 18.6953C7.10507 23.5112 12.7248 25.573 17.0217 22.9012C17.272 22.7458 17.4781 22.7185 17.7542 22.8026C18.2538 22.9542 18.758 23.0903 19.2717 23.2289C19.5199 23.2959 19.7704 23.3635 20.0236 23.4337ZM25.6922 3.56184C25.5217 3.60855 25.3534 3.654 25.1868 3.69899C24.7706 3.81139 24.3649 3.92095 23.9618 4.04033C23.8864 4.06725 23.8054 4.07529 23.7261 4.06375C23.6468 4.05221 23.5715 4.02144 23.5068 3.97411C22.271 3.16647 20.9167 2.79035 19.4423 2.94672C17.0278 3.20216 15.3008 4.45448 14.2264 6.6201C14.165 6.74399 14.1164 6.87424 14.0648 7.01253C14.0396 7.08023 14.0136 7.14985 13.9851 7.22161C16.1042 7.50334 17.9097 8.3678 19.3986 9.85631C20.8876 11.3448 21.7544 13.1601 22.0329 15.2563C22.0637 15.2468 22.0893 15.2393 22.1116 15.2327L22.1117 15.2327C22.1479 15.2221 22.1754 15.214 22.2024 15.2041C24.6164 14.3261 26.2937 11.9834 26.3434 9.39145C26.3778 8.09548 26.0063 6.82118 25.2808 5.74671C25.2332 5.68208 25.2022 5.60673 25.1906 5.5273C25.179 5.44787 25.1871 5.3668 25.2142 5.29124C25.3364 4.87698 25.4492 4.45942 25.5651 4.03035L25.5651 4.03025C25.6069 3.87573 25.649 3.71972 25.6922 3.56184ZM15.0421 15.6173L15.0421 17.0476C14.9101 17.0476 14.7783 17.0462 14.6468 17.0448C14.3341 17.0415 14.0226 17.0382 13.7123 17.0537C13.4455 17.0674 13.2666 16.9866 13.092 16.7819C12.7962 16.4344 12.4848 16.1005 12.1735 15.7667C12.0642 15.6495 11.9549 15.5323 11.8462 15.4145C11.4424 14.9769 10.9437 14.8313 10.3798 15.0013C9.81585 15.1713 9.50454 15.5699 9.40311 16.1442C9.27492 16.8697 9.85623 17.6355 10.601 17.7172C10.6449 17.7222 10.6889 17.7263 10.7479 17.7318L10.7479 17.7318L10.7888 17.7355L10.7888 19.1527C9.88863 19.1212 9.15188 18.793 8.61048 18.1074C7.89674 17.2031 7.75542 16.1926 8.24517 15.145C8.73492 14.0974 9.60689 13.556 10.7536 13.5179C11.534 13.4916 12.2228 13.7809 12.776 14.3416C12.9654 14.5337 13.1469 14.7334 13.3285 14.9332C13.4935 15.1147 13.6586 15.2963 13.8296 15.4723C13.9164 15.5527 14.0278 15.6015 14.1457 15.6108C14.3559 15.6242 14.5671 15.6218 14.7825 15.6193C14.8683 15.6183 14.9547 15.6173 15.0421 15.6173ZM17.8599 17.0279L17.8599 15.637L16.4761 15.637L16.4761 17.0279L17.8599 17.0279Z" fill="#CA005D"/>
    </svg>
    </button>

</div>

            <!-- The Modal -->
<div class="modal fade show" id="modalSoporte">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
        <div class="modal-content-soporte">
            <!-- Modal Header -->
            <div class="modal-header" style="position: relative; padding: 15px 0 0;">
            <h4 class="modal-title font-weight-bold text-black mx-auto">Soporte</h4>
            <button  type="button" class="close close-soporte" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <div class="container-agenda-horarios">
                    <div class="container-info-soporte">
                        <div class="detalle-soporte">
                            <p style="color: #959595;">Estimado colaborador. No te preocupes, tenemos un equipo técnico
                                detrás de esta plataforma para resolver tus dudas en este evento.
                                <p style="color: #959595;">¿Cómo tener mejor conectividad? </p>
                                <ol style="color: #959595; padding-left: 20px;">
                                    <li>Usar internet preferentemente mediante la conexión con cable.</li>
                                    <li>Si estás conectado vía WiFi estar lo más cerca posible del módem.</li>
                                    <li>Desconectar otros dispositivos que estén en la misma red WIFI.</li>
                                    <li>Tener actualizado el software del dispositivo
                                        que se utilizará para conectarse a la transmisión.</li>
                                </ol>

                            <p style="color: #959595; text-align: center; margin-bottom: 0;">Háblanos al: 940242598</p>
                        </div>
                    </div>
                </div>
                <div class="container-button-whatsapp" >
                    <a target="_blank"  href="https://wa.me/51940242598"
                    class="btn  font-weight-bold text-white"
                    style="background: #49BA39; color:white !important">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.183076 22.3335C0.122649 22.5529 0.0616765 22.7742 0 22.9982C0.0515403 22.9861 0.0937942 22.9764 0.130751 22.9679C0.179206 22.9568 0.218555 22.9478 0.257786 22.938C2.13181 22.446 4.00704 21.9587 5.88347 21.4761C5.99589 21.4474 6.11474 21.4571 6.22091 21.5038C7.81289 22.3276 9.50443 22.774 11.2966 22.8017C14.2782 22.8464 16.8915 21.8773 19.1396 19.9261C22.7833 16.7646 24.0147 11.3995 22.1085 6.97758C20.1102 2.34401 15.5385 -0.40109 10.4863 0.0477738C7.49609 0.313487 4.98303 1.59626 2.99496 3.83157C-0.269009 7.49819 -0.82441 12.6253 1.52246 16.9268C1.57684 17.037 1.59129 17.1624 1.56337 17.282C1.34936 18.0986 1.12535 18.911 0.901261 19.7237C0.839133 19.949 0.776998 20.1744 0.715068 20.3999C0.53977 21.0387 0.363862 21.6772 0.183076 22.3335ZM2.82038 20.2724C2.80128 20.2764 2.77897 20.2811 2.75165 20.287H2.75093C2.83019 19.998 2.90839 19.7116 2.98606 19.427C3.20608 18.621 3.42187 17.8304 3.64558 17.0422C3.67193 16.9647 3.67931 16.882 3.66709 16.801C3.65487 16.7201 3.62342 16.6432 3.57534 16.5768C2.44535 14.8397 1.91819 12.9314 2.04708 10.8688C2.22015 8.09379 3.4001 5.8026 5.55907 4.04104C7.42874 2.51598 9.59856 1.83458 12.0102 1.92435C16.3756 2.08695 20.2098 5.45397 20.9147 9.73638C21.6414 14.1594 19.4274 18.3228 15.3162 20.0894C12.3528 21.3636 9.43709 21.1245 6.64198 19.5184C6.42728 19.3951 6.24553 19.3745 6.01381 19.4376C5.24579 19.6456 4.47559 19.8454 3.70555 20.0452C3.43701 20.1149 3.16849 20.1846 2.9001 20.2546C2.87692 20.2605 2.85345 20.2654 2.82038 20.2724ZM8.74627 6.76928C8.57466 6.32547 8.34403 6.01397 7.88276 6.13403C7.12895 6.12357 6.96856 6.19568 6.53301 6.69501C5.74082 7.60392 5.56703 8.64874 5.86428 9.78767C6.10939 10.7269 6.65719 11.5056 7.22816 12.2703C8.81796 14.3996 10.7981 15.9863 13.4071 16.7099C14.4462 16.998 15.4234 16.936 16.3553 16.3357C17.1182 15.8443 17.364 15.1333 17.3405 14.2868C17.3376 14.1876 17.2572 14.043 17.1725 14.0009C16.3626 13.6003 15.5458 13.2127 14.7264 12.8316C14.4907 12.7217 14.3061 12.8061 14.1471 13.0177C13.9663 13.2586 13.7746 13.4912 13.5828 13.7239C13.4846 13.843 13.3865 13.9621 13.2898 14.0823C13.1319 14.2788 12.9458 14.3124 12.713 14.2197C11.0124 13.5448 9.71008 12.4116 8.77741 10.8476C8.65431 10.6418 8.66047 10.4712 8.81615 10.2812C8.9911 10.0676 9.15572 9.84548 9.32029 9.62346C9.38425 9.53717 9.44821 9.45089 9.51275 9.36512C9.66229 9.16647 9.6641 8.96385 9.56526 8.73563C9.28285 8.08415 9.00225 7.43122 8.74627 6.76928Z" fill="white"/>
                    </svg>
                    Contáctanos por WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
