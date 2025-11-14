
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>MAPA-SOLUCIONES-SOSTIC</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" type="text/css" href="css/mp.css">
        <link rel="shortcut icon" href="Docs/ICONOS/FavSostic.png">
    </head>
    <body onload="startLogos()">

        <!--FUNCIONES DE MOVIMIENTO-->
        <script>

            let gnrSP = "0";
            let gnrOR = "0";
            let gnrNB = "0";
            let gnrSE = "0";
            let gnrUM = "0";

            function startLogos() {
                var logSP = document.getElementById("SitioPrincipal");
                var logOR = document.getElementById("OficinaRemota");
                var logNB = document.getElementById("NubePublica");
                var logSE = document.getElementById("letrasSitioEspejo");
                var logUM = document.getElementById("UsuariosMoviles");
                var fixSP = document.getElementById("imgSitioPrincipal");
                var fixOR = document.getElementById("imgOficinaRemota");
                var fixNB = document.getElementById("imgNubePublica");
                var fixSE = document.getElementById("imgLetrasSitioEspejo");
                var fixUM = document.getElementById("imgUsuariosMoviles");
                logSP.style.display = "block";
                logOR.style.display = "block";
                logNB.style.display = "block";
                logSE.style.display = "block";
                logUM.style.display = "block";
                logSP.onended = function endStart() {
                    logSP.style.display = "none";
                    logOR.style.display = "none";
                    logNB.style.display = "none";
                    logSE.style.display = "none";
                    logUM.style.display = "none";
                    fixSP.style.display = "block";
                    fixOR.style.display = "block";
                    fixNB.style.display = "block";
                    fixSE.style.display = "block";
                    fixUM.style.display = "block";
                }
            }

            function showOverDoubleConst(id, id2, img) {
                var anim = document.getElementById(id)
                var anim2 = document.getElementById(id2)
                var fix = document.getElementById(img)
                if (anim.style.display == "block" || anim2.style.display == "block") {
                    anim.style.display = "none";
                    anim2.style.display = "none";
                    anim.currentTime = 0;
                    fix.style.display = "block";
                } else {
                    anim.style.display = "block";
                    anim.onended = function showElement() {
                        anim2.style.display = "block";
                    }
                    anim.currentTime = 0;
                    anim2.currentTime = 0;
                    fix.style.display = "none";
                }
            }


            function showOverDouble(id, id2, img) {
                var anim = document.getElementById(id)
                var fix = document.getElementById(img)
                var anim2 = document.getElementById(id2)
                if (fix.style.display == "block" || anim.style.display == "block" || anim2.style.display == "block") {
                    showOverDoubleOR(id, id2, img);
                }
            }


            function showOverDoubleOR(id, id2, img) {
                var anim = document.getElementById(id)
                var anim2 = document.getElementById(id2)
                var fix = document.getElementById(img)
                if (anim.style.display == "block" || anim2.style.display == "block") {
                    anim.style.display = "none";
                    anim2.style.display = "none";
                    anim.currentTime = 0;
                    fix.style.display = "block";
                } else {
                    anim.style.display = "block";
                    anim.onended = function showElement() {
                        anim.style.display = "none";
                        anim2.style.display = "block";
                    }
                    anim.currentTime = 0;
                    fix.style.display = "none";
                }
            }


            function showOnEnded() {
                var anim = document.getElementById("Cubo");
                var anim2 = document.getElementById("CuboLoop");
                anim.style.display = "block";
                anim.onended = function showNewAnim() {
                    anim.style.display = "none";
                    anim2.style.display = "block";
                }
            }


            function showOverLogos(id, img) {
                var anim = document.getElementById(id)
                var fix = document.getElementById(img)
                if (anim.style.display == "block") {
                    anim.style.display = "none";
                    anim.currentTime = 0;
                    fix.style.display = "block";
                } else {
                    anim.style.display = "block";
                    anim.currentTime = 0;
                    fix.style.display = "none";
                }
            }


            function showSitioPrincipal() {

                if (gnrSP == "0") {
                    gnrSP = "1";
                    imgHipervisor02.style.display = "block";
                    imgWiFi02.style.display = "block";
                    imgRouter02.style.display = "block";
                    imgHiper01.style.display = "block";
                    imgBrick02.style.display = "block";
                    imgLlave02.style.display = "block";
                    imgAccWAN02.style.display = "block";
                    imgVPN02.style.display = "block";
                    imgHic.style.display = "block";
                    imgAplicativos02.style.display = "block";
                    imgLaptop02.style.display = "block";
                    imgPc02.style.display = "block";
                    imgDisk01.style.display = "block";
                    Qualis.style.display = "block";
                    imgHipervisor02.style.animation = "fadeIn ease 2s";
                    imgWiFi02.style.animation = "fadeIn ease 2s";
                    imgRouter02.style.animation = "fadeIn ease 2s";
                    imgHiper01.style.animation = "fadeIn ease 2s";
                    imgBrick02.style.animation = "fadeIn ease 2s";
                    imgLlave02.style.animation = "fadeIn ease 2s";
                    imgAccWAN02.style.animation = "fadeIn ease 2s";
                    imgVPN02.style.animation = "fadeIn ease 2s";
                    imgHic.style.animation = "fadeIn ease 2s";
                    imgAplicativos02.animation = "fadeIn ease 2s";
                    imgLaptop02.style.animation = "fadeIn ease 2s";
                    imgPc02.style.animation = "fadeIn ease 2s";
                    imgDisk01.style.animation = "fadeIn ease 2s";
                    Qualis.style.animation = "fadeIn ease 2s";
                    imgHipervisor02.addEventListener("animationend", () => {
                        imgHipervisor02.style.display = "block";
                        imgWiFi02.style.display = "block";
                        imgRouter02.style.display = "block";
                        imgHiper01.style.display = "block";
                        imgBrick02.style.display = "block";
                        imgLlave02.style.display = "block";
                        imgAccWAN02.style.display = "block";
                        imgVPN02.style.display = "block";
                        imgHic.style.display = "block";
                        imgAplicativos02.style.display = "block";
                        imgLaptop02.style.display = "block";
                        imgPc02.style.display = "block";
                        imgDisk01.style.display = "block";
                        Qualis.style.display = "block";
                    });

                } else {
                    gnrSP = "0";
                    imgHipervisor02.style.animation = "fadeOut ease-out 2s";
                    imgWiFi02.style.animation = "fadeOut ease-out 2s";
                    imgRouter02.style.animation = "fadeOut ease-out 2s";
                    imgHiper01.style.animation = "fadeOut ease-out 2s";
                    imgBrick02.style.animation = "fadeOut ease-out 2s";
                    imgLlave02.style.animation = "fadeOut ease-out 2s";
                    imgAccWAN02.style.animation = "fadeOut ease-out 2s";
                    imgVPN02.style.animation = "fadeOut ease-out 2s";
                    imgHic.style.animation = "fadeOut ease-out 2s";
                    imgAplicativos02.style.animation = "fadeOut ease-out 2s";
                    imgLaptop02.style.animation = "fadeOut ease-out 2s";
                    imgPc02.style.animation = "fadeOut ease-out 2s";
                    imgDisk01.style.animation = "fadeOut ease-out 2s";
                    Qualis.style.animation = "fadeOut ease-out 2s";
                    imgHipervisor02.addEventListener("animationend", () => {
                        imgHipervisor02.style.display = "none";
                        imgWiFi02.style.display = "none";
                        imgRouter02.style.display = "none";
                        imgHiper01.style.display = "none";
                        imgBrick02.style.display = "none";
                        imgLlave02.style.display = "none";
                        imgAccWAN02.style.display = "none";
                        imgVPN02.style.display = "none";
                        imgHic.style.display = "none";
                        imgAplicativos02.style.display = "none";
                        imgLaptop02.style.display = "none";
                        imgPc02.style.display = "none";
                        imgDisk01.style.display = "none";
                        Qualis.style.display = "none";
                    });
                }
            }


            function showOficinaRemota() {


                if (gnrOR == "0") {
                    gnrOR = "1";
                    imgHipervisor01.style.display = "block";
                    imgHiper00.style.display = "block";
                    imgHic00.style.display = "block";
                    imgDisk00.style.display = "block";
                    imgWiFi01.style.display = "block";
                    imgRouter01.style.display = "block";
                    imgBrick01.style.display = "block";
                    imgLlave01.style.display = "block";
                    imgAccWAN01.style.display = "block";
                    imgVPN01.style.display = "block";
                    imgAplicativos01.style.display = "block";
                    imgLaptop01.style.display = "block";
                    imgPc01.style.display = "block";
                    imgHipervisor01.style.animation = "fadeIn ease 2s";
                    imgHiper00.style.animation = "fadeIn ease 2s";
                    imgHic00.style.animation = "fadeIn ease 2s";
                    imgDisk00.style.animation = "fadeIn ease 2s";
                    imgWiFi01.style.animation = "fadeIn ease 2s";
                    imgRouter01.style.animation = "fadeIn ease 2s";
                    imgBrick01.style.animation = "fadeIn ease 2s";
                    imgLlave01.style.animation = "fadeIn ease 2s";
                    imgAccWAN01.style.animation = "fadeIn ease 2s";
                    imgVPN01.style.animation = "fadeIn ease 2s";
                    imgAplicativos01.style.animation = "fadeIn ease 2s";
                    imgLaptop01.style.animation = "fadeIn ease 2s";
                    imgPc01.style.animation = "fadeIn ease 2s";
                    imgHipervisor01.addEventListener("animationend", () => {
                        imgHipervisor01.style.display = "block";
                        imgHiper00.style.display = "block";
                        imgHic00.style.display = "block";
                        imgDisk00.style.display = "block";
                        imgWiFi01.style.display = "block";
                        imgRouter01.style.display = "block";
                        imgBrick01.style.display = "block";
                        imgLlave01.style.display = "block";
                        imgAccWAN01.style.display = "block";
                        imgVPN01.style.display = "block";
                        imgAplicativos01.style.display = "block";
                        imgLaptop01.style.display = "block";
                        imgPc01.style.display = "block";
                    });
                } else {
                    gnrOR = "0";
                    imgHipervisor01.style.animation = "fadeOut ease-out 2s";
                    imgHiper00.style.animation = "fadeOut ease-out 2s";
                    imgHic00.style.animation = "fadeOut ease-out 2s";
                    imgDisk00.style.animation = "fadeOut ease-out 2s";
                    imgWiFi01.style.animation = "fadeOut ease-out 2s";
                    imgRouter01.style.animation = "fadeOut ease-out 2s";
                    imgBrick01.style.animation = "fadeOut ease-out 2s";
                    imgLlave01.style.animation = "fadeOut ease-out 2s";
                    imgAccWAN01.style.animation = "fadeOut ease-out 2s";
                    imgVPN01.style.animation = "fadeOut ease-out 2s";
                    imgAplicativos01.style.animation = "fadeOut ease-out 2s";
                    imgLaptop01.style.animation = "fadeOut ease-out 2s";
                    imgPc01.style.animation = "fadeOut ease-out 2s";
                    imgHipervisor01.addEventListener("animationend", () => {
                        imgHipervisor01.style.display = "none";
                        imgHiper00.style.display = "none";
                        imgHic00.style.display = "none";
                        imgDisk00.style.display = "none";
                        imgWiFi01.style.display = "none";
                        imgRouter01.style.display = "none";
                        imgBrick01.style.display = "none";
                        imgLlave01.style.display = "none";
                        imgAccWAN01.style.display = "none";
                        imgVPN01.style.display = "none";
                        imgAplicativos01.style.display = "none";
                        imgLaptop01.style.display = "none";
                        imgPc01.style.display = "none";
                    });
                }
            }


            function showUsuariosMoviles() {

                if (gnrUM == "0") {
                    gnrUM = "1";
                    imgBrick04.style.display = "block";
                    imgBrick05.style.display = "block";
                    imgBrick06.style.display = "block";
                    imgAplicativos04.style.display = "block";
                    imgAplicativos05.style.display = "block";
                    imgAplicativos06.style.display = "block";
                    imgLaptop04.style.display = "block";
                    imgTablet.style.display = "block";
                    imgMovil.style.display = "block";
                    imgLlave04.style.display = "block";
                    imgAccWAN04.style.display = "block";
                    imgVPN04.style.display = "block";
                    imgBrick04.style.animation = "fadeIn ease 2s";
                    imgBrick05.style.animation = "fadeIn ease 2s";
                    imgBrick06.style.animation = "fadeIn ease 2s";
                    imgAplicativos04.style.animation = "fadeIn ease 2s";
                    imgAplicativos05.style.animation = "fadeIn ease 2s";
                    imgAplicativos06.style.animation = "fadeIn ease 2s";
                    imgLaptop04.style.animation = "fadeIn ease 2s";
                    imgTablet.style.animation = "fadeIn ease 2s";
                    imgMovil.style.animation = "fadeIn ease 2s";
                    imgLlave04.style.animation = "fadeIn ease 2s";
                    imgAccWAN04.style.animation = "fadeIn ease 2s";
                    imgVPN04.style.animation = "fadeIn ease 2s";
                    imgBrick04.addEventListener("animationend", () => {
                        imgBrick04.style.display = "block";
                        imgBrick05.style.display = "block";
                        imgBrick06.style.display = "block";
                        imgAplicativos04.style.display = "block";
                        imgAplicativos05.style.display = "block";
                        imgAplicativos06.style.display = "block";
                        imgLaptop04.style.display = "block";
                        imgTablet.style.display = "block";
                        imgMovil.style.display = "block";
                        imgLlave04.style.display = "block";
                        imgAccWAN04.style.display = "block";
                        imgVPN04.style.display = "block";
                    });

                } else {
                    gnrUM = "0";
                    imgBrick04.style.animation = "fadeOut ease-out 2s";
                    imgBrick05.style.animation = "fadeOut ease-out 2s";
                    imgBrick06.style.animation = "fadeOut ease-out 2s";
                    imgAplicativos04.style.animation = "fadeOut ease-out 2s";
                    imgAplicativos05.style.animation = "fadeOut ease-out 2s";
                    imgAplicativos06.style.animation = "fadeOut ease 2s";
                    imgLaptop04.style.animation = "fadeOut ease 2s";
                    imgTablet.style.animation = "fadeOut ease 2s";
                    imgMovil.style.animation = "fadeOut ease 2s";
                    imgLlave04.style.animation = "fadeOut ease 2s";
                    imgAccWAN04.style.animation = "fadeOut ease 2s";
                    imgVPN04.style.animation = "fadeOut ease 2s";
                    imgBrick04.addEventListener("animationend", () => {
                        imgBrick04.style.display = "none";
                        imgBrick05.style.display = "none";
                        imgBrick06.style.display = "none";
                        imgAplicativos04.style.display = "none";
                        imgAplicativos05.style.display = "none";
                        imgAplicativos06.style.display = "none";
                        imgLaptop04.style.display = "none";
                        imgTablet.style.display = "none";
                        imgMovil.style.display = "none";
                        imgLlave04.style.display = "none";
                        imgAccWAN04.style.display = "none";
                        imgVPN04.style.display = "none";
                    });
                }
            }


            function showSitioEspejo() {

                if (gnrSE == "0") {
                    gnrSE = "1";
                    imgDisk02.style.display = "block";
                    imgLaptop03.style.display = "block";
                    imgPc03.style.display = "block";
                    imgAplicativos03.style.display = "block";
                    imgHipervisor03.style.display = "block";
                    imgRouter03.style.display = "block";
                    imgWiFi03.style.display = "block";
                    imgHiper02.style.display = "block";
                    imgLlave03.style.display = "block";
                    imgAccWAN03.style.display = "block";
                    imgVPN03.style.display = "block";
                    imgHic02.style.display = "block";
                    imgBrick03.style.display = "block";
                    imgFlechaSE.style.display = "block";
                    imgDisk02.style.animation = "fadeIn ease 2s";
                    imgLaptop03.style.animation = "fadeIn ease 2s";
                    imgPc03.style.animation = "fadeIn ease 2s";
                    imgAplicativos03.style.animation = "fadeIn ease 2s";
                    imgHipervisor03.style.animation = "fadeIn ease 2s";
                    imgRouter03.style.animation = "fadeIn ease 2s";
                    imgWiFi03.style.animation = "fadeIn ease 2s";
                    imgHiper02.style.animation = "fadeIn ease 2s";
                    imgLlave03.style.animation = "fadeIn ease 2s";
                    imgAccWAN03.style.animation = "fadeIn ease 2s";
                    imgVPN03.style.animation = "fadeIn ease 2s";
                    imgHic02.style.animation = "fadeIn ease 2s";
                    imgBrick03.style.animation = "fadeIn ease 2s";
                    imgFlechaSE.style.animation = "fadeIn ease 2s";
                    imgDisk02.addEventListener("animationend", () => {
                        showOnEndedClick();
                        imgDisk02.style.display = "block";
                        imgLaptop03.style.display = "block";
                        imgPc03.style.display = "block";
                        imgAplicativos03.style.display = "block";
                        imgHipervisor03.style.display = "block";
                        imgRouter03.style.display = "block";
                        imgWiFi03.style.display = "block";
                        imgHiper02.style.display = "block";
                        imgLlave03.style.display = "block";
                        imgAccWAN03.style.display = "block";
                        imgVPN03.style.display = "block";
                        imgHic02.style.display = "block";
                        imgBrick03.style.display = "block";
                        imgFlechaSE.style.display = "block";

                    });

                } else {
                    gnrSE = "0";
                    imgDisk02.style.animation = "fadeOut ease-out 2s";
                    imgLaptop03.style.animation = "fadeOut ease-out 2s";
                    imgPc03.style.animation = "fadeOut ease-out 2s";
                    imgAplicativos03.style.animation = "fadeOut ease-out 2s";
                    imgHipervisor03.style.animation = "fadeOut ease-out 2s";
                    imgRouter03.style.animation = "fadeOut ease-out 2s";
                    imgWiFi03.style.animation = "fadeOut ease-out 2s";
                    imgHiper02.style.animation = "fadeOut ease-out 2s";
                    imgLlave03.style.animation = "fadeOut ease-out 2s";
                    imgAccWAN03.style.animation = "fadeOut ease-out 2s";
                    imgVPN03.style.animation = "fadeOut ease-out 2s";
                    imgHic02.style.animation = "fadeOut ease-out 2s";
                    imgBrick03.style.animation = "fadeOut ease-out 2s";
                    imgFlechaSE.style.animation = "fadeOut ease-out 2s";
                    Sitio_Espejo_Linea.style.animation = "fadeOut ease-out 2s";
                    imgDisk02.addEventListener("animationend", () => {
                        imgDisk02.style.display = "none";
                        imgLaptop03.style.display = "none";
                        imgPc03.style.display = "none";
                        imgAplicativos03.style.display = "none";
                        imgHipervisor03.style.display = "none";
                        imgRouter03.style.display = "none";
                        imgWiFi03.style.display = "none";
                        imgHiper02.style.display = "none";
                        imgLlave03.style.display = "none";
                        imgAccWAN03.style.display = "none";
                        imgVPN03.style.display = "none";
                        imgHic02.style.display = "none";
                        imgBrick03.style.display = "none";
                        imgFlechaSE.style.display = "none";
                        Sitio_Espejo_Linea.style.display = "none";
                        Linea02.style.display = "none";
                        Sitio_Espejo_Linea.currentTime = 0;
                        Linea02.currentTime = 0;
                    });
                }
            }


            function showNube() {

                if (gnrNB == "0") {
                    gnrNB = "1";
                    imgLock.style.display = "block";
                    imgNubePrivada.style.display = "block";
                    imgLock.style.animation = "fadeIn ease 2s";
                    imgNubePrivada.style.animation = "fadeIn ease 2s";
                    imgLock.addEventListener("animationend", () => {
                        imgLock.style.display = "block";
                        imgNubePrivada.style.display = "block";
                    });

                } else {
                    gnrNB = "0";
                    imgLock.style.animation = "fadeOut ease-out 2s";
                    imgNubePrivada.style.animation = "fadeOut ease-out 2s";
                    imgLock.addEventListener("animationend", () => {
                        imgLock.style.display = "none";
                        imgNubePrivada.style.display = "none";
                    });
                }
            }


            function showOnEndedClick() {
                let anim = document.getElementById("Linea02");
                var anim2 = document.getElementById("Sitio_Espejo_Linea");
                anim.style.display = "block";
                anim2.style.animation = "none";
                anim.onended = function showNewAnim() {
                    anim.style.display = "none";
                    anim2.style.display = "block";
                }
            }


            function showOver(id, id2) {
                var anim = document.getElementById(id)
                var fix = document.getElementById(id2)
                if (fix.style.display == "block" || anim.style.display == "block") {
                    showOverOR(id, id2);
                }
            }


            function showOverOR(id, img) {
                var anim = document.getElementById(id)
                var fix = document.getElementById(img)
                if (anim.style.display == "block") {
                    anim.style.display = "none";
                    anim.currentTime = 0;
                    fix.style.display = "block";
                } else {
                    anim.style.display = "block";
                    anim.currentTime = 0;
                    fix.style.display = "none";
                }
            }

        </script>



        <!--ELEMENTOS Y TRIGGERS DE ANIMACION MAPA DE SOLUCIONES-->
        <!--ANIMACION FIJA NUBE CENTRAL CON BRAZOS-->
        <div function showOnEnded();>
            <video src="Anims\WEBM\nube con brazos_2_VP9.webm"
                   autoplay loop muted class="posNube"
                   onplay="showOnEnded()">
            </video>

        </div>

        <!--ANIMACION DROPBOX CON OVERMOUSE
    <div>
        <button onmouseover="showOverLogos('Dropbox', 'imgDropbox')" onmouseout="showOverLogos('Dropbox', 'imgDropbox')" class="showOverDropbox"> </button>
    </div>-->
        <!--ANIMACION SosticCloud CON OVERMOUSE-->
        <div>
            <button onmouseover="showOverLogos('SosticCloud', 'imgSosticCloud')" onmouseout="showOverLogos('SosticCloud', 'imgSosticCloud')" class="showOverSosticCloud"> </button>
        </div>


        <!--ANIMACION BOX CON OVERMOUSE
    <div>
        <button onmouseover="showOverLogos('Box', 'imgBox')" onmouseout="showOverLogos('Box', 'imgBox')" class="showOverBox"> </button>
    </div> -->
        <!--ANIMACION GSUITE CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('Gsuite', 'imgGsuite')" onmouseout="showOverLogos('Gsuite', 'imgGsuite')" class="showOverGsuite"> </button>
        </div>

        <!--ANIMACION MICROSOFT 365 CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('M365', 'imgM365')" onmouseout="showOverLogos('M365', 'imgM365')" class="showOverM365"> </button>
        </div>

        <!--ANIMACION SLACK CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverDoubleConst('Slack', 'Slack2', 'imgSlack')" onmouseout="showOverDoubleConst('Slack', 'Slack2', 'imgSlack')" class="showOverSlack"> </button>
        </div>

        <!--ANIMACION SALES FORCE CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('SalesForce', 'imgSalesForce')" onmouseout="showOverLogos('SalesForce', 'imgSalesForce')" class="showOverSalesForce"> </button>
        </div>

        <!--ANIMACION SERVICE NOW CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('ServiceNow', 'imgServiceNow')" onmouseout="showOverLogos('ServiceNow', 'imgServiceNow')" class="showOverServiceNow"> </button>
        </div>

        <!--ANIMACION VMWARE CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('VMware', 'imgVMware')" onmouseout="showOverLogos('VMware', 'imgVMware')" class="showOverVMware"> </button>
        </div>

        <!--ANIMACION AWS CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('AWS', 'imgAWS')" onmouseout="showOverLogos('AWS', 'imgAWS')" class="showOverAWS"> </button>
        </div>

        <!--ANIMACION ALIBABA CLOUD CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('AlibabaCloud', 'imgAlibabaCloud')" onmouseout="showOverLogos('AlibabaCloud', 'imgAlibabaCloud')" class="showOverAlibabaCloud"> </button>
        </div>

        <!--ANIMACION IBM CLOUD CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('IBMCloud', 'imgIBMCloud')" onmouseout="showOverLogos('IBMCloud', 'imgIBMCloud')" class="showOverIBMCloud"> </button>
        </div>

        <!--ANIMACION ORACLE CLOUD CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('OracleCloud', 'imgOracleCloud')" onmouseout="showOverLogos('OracleCloud', 'imgOracleCloud')" class="showOverOracleCloud"> </button>
        </div>

        <!--ANIMACION MICROSOFT AZURE CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('MicrosoftAzure', 'imgMicrosoftAzure')" onmouseout="showOverLogos('MicrosoftAzure', 'imgMicrosoftAzure')" class="showOverMicrosoftAzure"> </button>
        </div>

        <!--ANIMACION GOOGLE CLOUD PLATFORM CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverLogos('GCPlatform', 'imgGCPlatform')" onmouseout="showOverLogos('GCPlatform', 'imgGCPlatform')" class="showOverGCPlatform"> </button>
        </div>









        <!--ANIMACIONES OFICINA REMOTA -->
        <!--ANIMACION OFICINA REMOTA CON OVERMOUSE -->
        <div>
            <button onclick="showOficinaRemota()" onmouseover="showOverLogos('OficinaRemota', 'imgOficinaRemota', 'gnrLogOR')" onmouseout="showOverLogos('OficinaRemota', 'imgOficinaRemota', 'gnrLogOR')"
                    class="showOverOficinaRemota">
            </button>
        </div>

        <!--ANIMACION HIPERCONVERGENCIA 00 CON OVERMOUSE -->
        <div>
            <button onmouseover="showOver('Hiper00', 'imgHiper00' )" onmouseout="showOver('Hiper00', 'imgHiper00' )" class="showOverHiper00"> </button>
        </div>

        <!--ANIMACION HIC00 CON OVERMOUSE -->
        <div>
            <button onmouseover="showOverDouble('Hic00', 'Hic20', 'imgHic00')" onmouseout="showOverDouble('Hic00','Hic20', 'imgHic00')" class="showOverHic00"> </button>
        </div>

        <!--ANIMACION DISK 00 CON OVERMOUSE -->
        <div>
            <button onmouseover="showOver('Disk00', 'imgDisk00')" onmouseout="showOver('Disk00', 'imgDisk00')" class="showOverDisk00"> </button>
        </div>





        <!--ANIMACION APLICATIVOS 02 CON OVERMOUSE -->
        <div>

            <!--ANIMACION HIPERVISOR 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Hipervisor01', 'imgHipervisor01')" onmouseout="showOver('Hipervisor01', 'imgHipervisor01')" class="showOverHipervisor01"
                        id="btnHipervisor01"> </button>
            </div>

            <!--ANIMACION BRICK 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Brick01', 'imgBrick01')" onmouseout="showOver('Brick01', 'imgBrick01')" class="showOverBrick01"> </button>
            </div>

            <!--ANIMACION WIFI 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('WiFi01', 'imgWiFi01')" onmouseout="showOver('WiFi01', 'imgWiFi01')" class="showOverWiFi01"> </button>
            </div>

            <!--ANIMACION ROUTER 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Router01', 'imgRouter01')" onmouseout="showOver('Router01', 'imgRouter01')" class="showOverRouter01"> </button>
            </div>

            <!--ANIMACION LAPTOP 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Laptop01', 'imgLaptop01')" onmouseout="showOver('Laptop01', 'imgLaptop01')" class="showOverLaptop01"> </button>
            </div>

            <!--ANIMACION PC 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Pc01', 'imgPc01')" onmouseout="showOver('Pc01', 'imgPc01')" class="showOverPc01"> </button>
            </div>

            <!--ANIMACION APLICATIVOS 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Aplicativos01', 'imgAplicativos01')" onmouseout="showOver('Aplicativos01', 'imgAplicativos01')" class="showOverAplicativos01"> </button>
            </div>

            <!--ANIMACION LLAVE 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Llave01', 'imgLlave01')" onmouseout="showOver('Llave01', 'imgLlave01')" class="showOverLlave01"> </button>
            </div>

            <!--ANIMACION ACELERADOR WAN 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('AccWAN01', 'imgAccWAN01')" onmouseout="showOver('AccWAN01', 'imgAccWAN01')" class="showOverAccWAN01"> </button>
            </div>

            <!--ANIMACION VPN 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('VPN01', 'imgVPN01')" onmouseout="showOver('VPN01', 'imgVPN01')" class="showOverVPN01"> </button>
            </div>









            <!--ANIMACIONES SITIO PRINCIPAL -->
            <!--ANIMACION SITIO PRINCIPAL CON OVERMOUSE -->
            <div>
                <button onmouseover="showOverLogos('SitioPrincipal', 'imgSitioPrincipal')" onmouseout="showOverLogos('SitioPrincipal', 'imgSitioPrincipal')"
                        onclick="showSitioPrincipal()"
                        class="showOverSitioPrincipal">
                </button>
            </div>

            <!--ANIMACION BRICK 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Brick02', 'imgBrick02' )" onmouseout="showOver('Brick02', 'imgBrick02' )" class="showOverBrick02"> </button>
            </div>

            <!--ANIMACION WIFI 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('WiFi02', 'imgWiFi02' )" onmouseout="showOver('WiFi02', 'imgWiFi02' )" class="showOverWiFi02"> </button>
            </div>

            <!--ANIMACION ROUTER 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Router02', 'imgRouter02' )" onmouseout="showOver('Router02', 'imgRouter02' )" class="showOverRouter02"> </button>
            </div>

            <!--ANIMACION HIPERVISOR 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Hipervisor02', 'imgHipervisor02' )" onmouseout="showOver('Hipervisor02', 'imgHipervisor02' )" class="showOverHipervisor02"> </button>
            </div>

            <!--ANIMACION LLAVE 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Llave02', 'imgLlave02' )" onmouseout="showOver('Llave02', 'imgLlave02' )" class="showOverLlave02"> </button>
            </div>

            <!--ANIMACION ACELERADOR WAN 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('AccWAN02', 'imgAccWAN02' )" onmouseout="showOver('AccWAN02', 'imgAccWAN02' )" class="showOverAccWAN02"> </button>
            </div>

            <!--ANIMACION VPN 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('VPN02', 'imgVPN02' )" onmouseout="showOver('VPN02', 'imgVPN02' )" class="showOverVPN02"> </button>
            </div>

            <!--ANIMACION HIPERCONVERGENCIA 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Hiper01', 'imgHiper01' )" onmouseout="showOver('Hiper01', 'imgHiper01' )" class="showOverHiper01"> </button>
            </div>

            <!--ANIMACION HIC CON OVERMOUSE -->
            <div>
                <button onmouseover="showOverDouble('Hic', 'Hic2', 'imgHic')" onmouseout="showOverDouble('Hic','Hic2', 'imgHic')" class="showOverHic"> </button>
            </div>

            <!--ANIMACION APLICATIVOS 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Aplicativos02', 'imgAplicativos02') " onmouseout="showOver('Aplicativos02', 'imgAplicativos02' )" class="showOverAplicativos02"> </button>
            </div>

            <!--ANIMACION LAPTOP 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Laptop02', 'imgLaptop02' )" onmouseout="showOver('Laptop02', 'imgLaptop02' )" class="showOverLaptop02"> </button>
            </div>

            <!--ANIMACION PC 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Pc02', 'imgPc02' )" onmouseout="showOver('Pc02', 'imgPc02' )" class="showOverPc02"> </button>
            </div>

            <!--ANIMACION DISK 01 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Disk01', 'imgDisk01')" onmouseout="showOver('Disk01', 'imgDisk01')" class="showOverDisk01"> </button>
            </div>





            <!--ANIMACIONES NUBE-->
            <!--ANIMACION NUBE PUBLICA CON OVERMOUSE -->
            <div>
                <button onmouseover="showOverLogos('NubePublica', 'imgNubePublica')" onmouseout="showOverLogos('NubePublica', 'imgNubePublica')"
                        onclick="showNube()"
                        class="showOverNubePublica"> </button>
            </div>

            <!--ANIMACION NUBE PRIVADA CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('NubePrivada', 'imgNubePrivada')" onmouseout="showOver('NubePrivada', 'imgNubePrivada')" class="showOverNubePrivada"> </button>
            </div>

            <!--ANIMACION NUBE PRIVADA CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Lock', 'imgLock')" onmouseout="showOver('Lock', 'imgLock')" class="showOverLock"> </button>
            </div>








            <!--ANIMACIONES SITIO ESPEJO-->
            <!--ANIMACION SITIO ESPEJO CON OVERMOUSE -->

            <div>
                <button onmouseover="showOverLogos('letrasSitioEspejo', 'imgLetrasSitioEspejo')" onmouseout="showOverLogos('letrasSitioEspejo', 'imgLetrasSitioEspejo')"
                        onclick="showSitioEspejo()"
                        class="showMirrorSite">
                </button>
            </div>

            <!--ANIMACION BRICK 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Brick03', 'imgBrick03')" onmouseout="showOver('Brick03', 'imgBrick03')" class="showOverBrick03"> </button>
            </div>

            <!--ANIMACION LLAVE 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Llave03', 'imgLlave03')" onmouseout="showOver('Llave03', 'imgLlave03')" class="showOverLlave03"> </button>
            </div>

            <!--ANIMACION ACELERADOR WAN 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('AccWAN03', 'imgAccWAN03')" onmouseout="showOver('AccWAN03', 'imgAccWAN03')" class="showOverAccWAN03"> </button>
            </div>

            <!--ANIMACION VPN 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('VPN03', 'imgVPN03')" onmouseout="showOver('VPN03', 'imgVPN03')" class="showOverVPN03"> </button>
            </div>

            <!--ANIMACION DISK 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Disk02', 'imgDisk02')" onmouseout="showOver('Disk02', 'imgDisk02')" class="showOverDisk02"> </button>
            </div>

            <!--ANIMACION LAPTOP 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Laptop03', 'imgLaptop03')" onmouseout="showOver('Laptop03', 'imgLaptop03')" class="showOverLaptop03"> </button>
            </div>

            <!--ANIMACION PC 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Pc03', 'imgPc03')" onmouseout="showOver('Pc03', 'imgPc03')" class="showOverPc03"> </button>
            </div>

            <!--ANIMACION APLICATIVOS 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Aplicativos03', 'imgAplicativos03')" onmouseout="showOver('Aplicativos03', 'imgAplicativos03')" class="showOverAplicativos03"> </button>
            </div>

            <!--ANIMACION HIPERVISOR 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Hipervisor03', 'imgHipervisor03')" onmouseout="showOver('Hipervisor03', 'imgHipervisor03')" class="showOverHipervisor03"> </button>
            </div>

            <!--ANIMACION ROUTER 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Router03', 'imgRouter03')" onmouseout="showOver('Router03', 'imgRouter03')" class="showOverRouter03"> </button>
            </div>

            <!--ANIMACION WIFI 03 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('WiFi03', 'imgWiFi03')" onmouseout="showOver('WiFi03', 'imgWiFi03')" class="showOverWiFi03"> </button>
            </div>

            <!--ANIMACION HIC 02 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOverDouble('Hic02', 'Hic4', 'imgHic02')" onmouseout="showOverDouble('Hic02','Hic4', 'imgHic02')" class="showOverHic02"> </button>
            </div>

            <!--ANIMACION HIPERCONVERGENCIA 02 CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('Hiper02', 'imgHiper02')" onmouseout="showOver('Hiper02', 'imgHiper02')" class="showOverHiper02"> </button>
            </div>

            <!--ANIMACION FLECHA SITIO ESPEJO CON OVERMOUSE -->

            <div>
                <button onmouseover="showOver('FlechaSE', 'imgFlechaSE')" onmouseout="showOver('FlechaSE', 'imgFlechaSE')" class="showOverFlechaSE"> </button>
            </div>







            <!--ANIMACIONES USUARIOS MOVILES-->
            <!--ANIMACION USUARIOS MOVILES CON OVERMOUSE -->
            <div>
                <button onmouseover="showOverLogos('UsuariosMoviles', 'imgUsuariosMoviles')" onmouseout="showOverLogos('UsuariosMoviles', 'imgUsuariosMoviles')"
                        onclick="showUsuariosMoviles()"
                        class="showOverUsuariosMoviles">
                </button>
            </div>

            <!--ANIMACION BRICK 04 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Brick04', 'imgBrick04')" onmouseout="showOver('Brick04', 'imgBrick04')" class="showOverBrick04"> </button>
            </div>

            <!--ANIMACION BRICK 05 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Brick05', 'imgBrick05')" onmouseout="showOver('Brick05', 'imgBrick05')" class="showOverBrick05"> </button>
            </div>

            <!--ANIMACION BRICK 06 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Brick06', 'imgBrick06')" onmouseout="showOver('Brick06', 'imgBrick06')" class="showOverBrick06"> </button>
            </div>

            <!--ANIMACION APLICATIVOS 04 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Aplicativos04', 'imgAplicativos04')" onmouseout="showOver('Aplicativos04', 'imgAplicativos04')" class="showOverAplicativos04"> </button>
            </div>

            <!--ANIMACION APLICATIVOS 05 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Aplicativos05', 'imgAplicativos05')" onmouseout="showOver('Aplicativos05', 'imgAplicativos05')" class="showOverAplicativos05"> </button>
            </div>

            <!--ANIMACION APLICATIVOS 06 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Aplicativos06', 'imgAplicativos06')" onmouseout="showOver('Aplicativos06', 'imgAplicativos06')" class="showOverAplicativos06"> </button>
            </div>

            <!--ANIMACION LAPTOP 04 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Laptop04', 'imgLaptop04')" onmouseout="showOver('Laptop04', 'imgLaptop04')" class="showOverLaptop04"> </button>
            </div>

            <!--ANIMACION TABLET CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Tablet', 'imgTablet')" onmouseout="showOver('Tablet', 'imgTablet')" class="showOverTablet"> </button>
            </div>

            <!--ANIMACION CELULAR CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Movil', 'imgMovil')" onmouseout="showOver('Movil', 'imgMovil')" class="showOverMovil"> </button>
            </div>

            <!--ANIMACION LLAVE 04 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('Llave04', 'imgLlave04' )" onmouseout="showOver('Llave04', 'imgLlave04' )" class="showOverLlave04"> </button>
            </div>

            <!--ANIMACION ACELERADOR WAN 04 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('AccWAN04', 'imgAccWAN04' )" onmouseout="showOver('AccWAN04', 'imgAccWAN04' )" class="showOverAccWAN04"> </button>
            </div>

            <!--ANIMACION VPN 04 CON OVERMOUSE -->
            <div>
                <button onmouseover="showOver('VPN04', 'imgVPN04' )" onmouseout="showOver('VPN04', 'imgVPN04' )" class="showOverVPN04"> </button>
            </div>


            <!--ELEMENTOS GENERALES PARA ANIMACIONES -->
            <form>


                <!--ELEMENTOS SOSTIC -->
                <img src="Docs/ICONOS/SOSTIC.png" id="imgSostic" class="posSostic"></img>


                <!--ELEMENTOS GENERALES NUBE CENTRAL -->
                <!--ELEMENTOS SITIO ESPEJO CON BOTON -->
                <video src="Anims\WEBM\Sitio Espejo Iconos.webm" preload autoplay muted id="Sitio_Espejo" class="posSitioEspejo"></video>

                <!--ELEMENTOS SITIO ESPEJO LINEA CON BOTON -->
                <video src="Anims\WEBM\Sitio Espejo Linea Punteada loop_VP9.webm" preload autoplay loop muted id="Sitio_Espejo_Linea" class="posSitioEspejoLinea"></video>
                <video src="Anims\WEBM\Sitio Espejo Linea Punteada_VP9.webm" preload autoplay muted id="Linea02" class="posSitioEspejoLinea02"></video>



                <!--ELEMENTOS SOSTIC CLOUD-->
                <video src="Anims\WEBM\Logo_SOSTIC_CLOUD.png" autoplay muted id="SosticCloud" class="posSosticCloud"></video>
                <img src="Docs/ICONOS/Logo_SOSTIC_CLOUD.png" id="imgSosticCloud" class="posImgSosticCloud"></img>




                <!--ELEMENTOS BOX
            <video src="Anims\WEBM\box_VP9.webm" autoplay muted id="Box" class="posBox"></video>
            <img src="Docs/ICONOS/box.png" id="imgBox" class="posImgBox"></img>-->
                <!--ELEMENTOS GSUITE-->
                <video src="Anims\WEBM\Gsuite_VP9.webm" autoplay muted id="Gsuite" class="posGsuite"></video>
                <img src="Docs/ICONOS/Gsuite.png" id="imgGsuite" class="posImgGsuite"></img>

                <!--ELEMENTOS MICROSOFT 365-->
                <video src="Anims\WEBM\Microsoft 365_VP9.webm" autoplay muted id="M365" class="posM365"></video>
                <img src="Docs/ICONOS/Microsoft 365.png" id="imgM365" class="posImgM365"></img>

                <!--ELEMENTOS SLACK
            <video src="Anims\WEBM\slack_1_VP9.webm" autoplay muted id="Slack" class="posSlack"></video>
            <video src="Anims\WEBM\slack_gotas_VP9.webm" autoplay loop muted id="Slack2" class="posSlack2"></video>
            <img src="Docs/ICONOS/slack.png" id="imgSlack" class="posImgSlack"></img>-->
                <!--ELEMENTOS SALES FORCE
            <video src="Anims\WEBM\Salesforce_VP9.webm" autoplay muted id="SalesForce" class="posSalesForce"></video>
            <img src="Docs/ICONOS/salesforce.png" id="imgSalesForce" class="posImgSalesForce"></img> -->
                <!--ELEMENTOS SERVICE NOW
            <video src="Anims\WEBM\Service now_VP9.webm" autoplay muted id="ServiceNow" class="posServiceNow"></video>
            <img src="Docs/ICONOS/Service now.png" id="imgServiceNow" class="posImgServiceNow"></img> -->
                <!--ELEMENTOS CUBO-->
                <video src="Anims\WEBM\Cubo_loop_VP9.webm" autoplay loop muted id="CuboLoop" class="posCuboLoop"></video>
                <video src="Anims\WEBM\Cubo_2_VP9.webm" autoplay muted class="posCubo" id="Cubo">
                </video>

                <!--ELEMENTOS VMWARE-->
                <video src="Anims\WEBM\WMWARE_VP9.webm" autoplay muted id="VMware" class="posVMware"></video>
                <img src="Docs/ICONOS/VMWARE7.png" id="imgVMware" class="posImgVMware"></img>

                <!--ELEMENTOS AWS-->
                <video src="Anims\WEBM\AWS_VP9.webm" autoplay muted id="AWS" class="posAWS"></video>
                <img src="Docs/ICONOS/aws.png" id="imgAWS" class="posImgAWS"></img>

                <!--ELEMENTOS ALIBABA CLOUD
            <video src="Anims\WEBM\Alibaba_VP9.webm" autoplay muted id="AlibabaCloud" class="posAlibabaCloud"></video>
            <img src="Docs/ICONOS/Alibaba.png" id="imgAlibabaCloud" class="posImgAlibabaCloud"></img> -->
                <!--ELEMENTOS IBM CLOUD
            <video src="Anims\WEBM\IBM Cloud_VP9.webm" autoplay muted id="IBMCloud" class="posIBMCloud"></video>
            <img src="Docs/ICONOS/IBM Cloud.png" id="imgIBMCloud" class="posImgIBMCloud"></img> -->
                <!--ELEMENTOS ORACLE CLOUD
            <video src="Anims\WEBM\Oracle_VP9.webm" autoplay muted id="OracleCloud" class="posOracleCloud"></video>
            <img src="Docs/ICONOS/Oracle.png" id="imgOracleCloud" class="posImgOracleCloud"></img> -->
                <!--ELEMENTOS ORACLE CLOUD-->
                <video src="Anims\WEBM\Microsoft Azure_VP9.webm" autoplay muted id="MicrosoftAzure" class="posMicrosoftAzure"></video>
                <img src="Docs/ICONOS/Microsoft Azure.png" id="imgMicrosoftAzure" class="posImgMicrosoftAzure"></img>

                <!--ELEMENTOS GOOGLE CLOUD PLATFORM-->
                <video src="Anims\WEBM\Google Cloud_VP9.webm" autoplay muted id="GCPlatform" class="posGCPlatform"></video>
                <img src="Docs/ICONOS/Google Cloud.png" id="imgGCPlatform" class="posImgGCPlatform"></img>






                <!--ELEMENTOS GENERALES OFICINA REMOTA -->
                <!--ELEMENTOS OFICINA REMOTA-->
                <video src="Anims\WEBM\Letras oficina remota_VP9.webm" autoplay muted id="OficinaRemota" class="posOficinaRemota"></video>
                <img src="Docs/ICONOS/Letras Oficina Remota.png" id="imgOficinaRemota" class="posImgOficinaRemota"></img>

                <!--ELEMENTOS HIPERVISOR 00-->
                <video src="Anims\WEBM\Hipervisor_2_VP9.webm" autoplay muted id="Hipervisor01" class="posHipervisor01"></video>
                <img src="Docs/ICONOS/Hipervisor.png" id="imgHipervisor01" class="posImgHipervisor01"></img>

                <!--ELEMENTOS HIPERCONVERGENCIA 00-->
                <video src="Anims\WEBM\Hiperconvergencia_VP9.webm" autoplay muted id="Hiper00" class="posHiper00"></video>
                <img src="Docs/ICONOS/Hiperconvergencia.png" id="imgHiper00" class="posImgHiper00"></img>

                <!--ELEMENTOS HIC 00-->
                <video src="Anims\WEBM\nube pequeña_VP9.webm" autoplay muted id="Hic00" class="posHic00"></video>
                <video src="Anims\WEBM\nube pequeña_1_VP9.webm" autoplay loop muted id="Hic20" class="posHic20"></video>
                <img src="Docs/ICONOS/nube pequeña.png" id="imgHic00" class="posImgHic00"></img>

                <!--ELEMENTOS DISK 00 -->
                <video src="Anims\WEBM\Almacenamiento (discos)_VP9.webm" autoplay muted id="Disk00" class="posDisk00"></video>
                <img src="Docs/ICONOS/Almacenamiento (discos).png" id="imgDisk00" class="posImgDisk00"></img>

                <!--ELEMENTOS BRICK 01-->
                <video src="Anims\WEBM\Ladrillo_VP9.webm" autoplay muted id="Brick01" class="posBrick01"></video>
                <img src="Docs/ICONOS/Ladrillo.png" id="imgBrick01" class="posImgBrick01"></img>

                <!--ELEMENTOS WIFI 01-->
                <video src="Anims\WEBM\Wifi_VP9.webm" autoplay loop muted id="WiFi01" class="posWiFi01"></video>
                <img src="Docs/ICONOS/Wifi.png" id="imgWiFi01" class="posImgWiFi01"></img>

                <!--ELEMENTOS ROUTER 01-->
                <video src="Anims\WEBM\Switch 2_VP9.webm" autoplay muted id="Router01" class="posRouter01"></video>
                <img src="Docs/ICONOS/Switch.png" id="imgRouter01" class="posImgRouter01"></img>

                <!--ELEMENTOS LAPTOP 01-->
                <video src="Anims\WEBM\Laptop_VP9.webm" autoplay muted id="Laptop01" class="posLaptop01"></video>
                <img src="Docs/ICONOS/Laptop.png" id="imgLaptop01" class="posImgLaptop01"></img>

                <!--ELEMENTOS PC 01-->
                <video src="Anims\WEBM\Computadora escritorio_VP9.webm" autoplay muted id="Pc01" class="posPc01"></video>
                <img src="Docs/ICONOS/Computadora escritorio.png" id="imgPc01" class="posImgPc01"></img>

                <!--ELEMENTOS APLICATIVOS 01-->
                <video src="Anims\WEBM\Aplicativos_VP9.webm" autoplay loop muted id="Aplicativos01" class="posAplicativos01"></video>
                <img src="Docs/ICONOS/Aplicativos.png" id="imgAplicativos01" class="posImgAplicativos01"></img>

                <!--ELEMENTOS LLAVE 01-->
                <video src="Anims\WEBM\Llave_VP9.webm" autoplay muted id="Llave01" class="posLlave01"></video>
                <img src="Docs/ICONOS/Llave.png" id="imgLlave01" class="posImgLlave01"></img>

                <!--ELEMENTOS ACELERADOR WAN 01-->
                <video src="Anims\WEBM\Aceleradores WAN_VP9.webm" autoplay muted id="AccWAN01" class="posAccWAN01"></video>
                <img src="Docs/ICONOS/Aceleradores WAN.png" id="imgAccWAN01" class="posImgAccWAN01"></img>

                <!--ELEMENTOS VPN 01-->
                <video src="Anims\WEBM\VPN_VP9.webm" autoplay muted id="VPN01" class="posVPN01"></video>
                <img src="Docs/ICONOS/VPN.png" id="imgVPN01" class="posImgVPN01"></img>






                <!--ELEMENTOS GENERALES SITIO PRINCIPAL -->
                <!--ELEMENTOS SITIO PRINCIPAL-->
                <video src="Anims\WEBM\Letras sitio principal_VP9.webm" autoplay muted id="SitioPrincipal" class="posSitioPrincipal"></video>
                <img src="Docs/ICONOS/Letras Sitio Principal.png" id="imgSitioPrincipal" class="posImgSitioPrincipal"></img>

                <!--ELEMENTOS ANALISTA-->
                <video src="Anims\WEBM\Analista_3_VP9.webm" autoplay loop muted id="Analista" class="posAnalista"></video>

                <!--ELEMENTOS QUALIS-->
                <video src="Anims\WEBM\Logo Qualys_2_VP9.webm" autoplay loop muted id="Qualis" class="posQualis"></video>

                <!--ELEMENTOS BRICK 02-->
                <video src="Anims\WEBM\Ladrillo_VP9.webm" autoplay muted id="Brick02" class="posBrick02"></video>
                <img src="Docs/ICONOS/Ladrillo.png" id="imgBrick02" class="posImgBrick02"></img>

                <!--ELEMENTOS WIFI 02-->
                <video src="Anims\WEBM\Wifi_VP9.webm" autoplay loop muted id="WiFi02" class="posWiFi02"></video>
                <img src="Docs/ICONOS/Wifi.png" id="imgWiFi02" class="posImgWiFi02"></img>

                <!--ELEMENTOS ROUTER 02-->
                <video src="Anims\WEBM\Switch 2_VP9.webm" autoplay muted id="Router02" class="posRouter02"></video>
                <img src="Docs/ICONOS/Switch.png" id="imgRouter02" class="posImgRouter02"></img>

                <!--ELEMENTOS HIPERVISOR 02-->
                <video src="Anims\WEBM\Hipervisor_2_VP9.webm" autoplay muted id="Hipervisor02" class="posHipervisor02"></video>
                <img src="Docs/ICONOS/Hipervisor.png" id="imgHipervisor02" class="posImgHipervisor02"></img>

                <!--ELEMENTOS LLAVE 02-->
                <video src="Anims\WEBM\Llave_VP9.webm" autoplay muted id="Llave02" class="posLlave02"></video>
                <img src="Docs/ICONOS/Llave.png" id="imgLlave02" class="posImgLlave02"></img>

                <!--ELEMENTOS ACELERADOR WAN 02-->
                <video src="Anims\WEBM\Aceleradores WAN_VP9.webm" autoplay muted id="AccWAN02" class="posAccWAN02"></video>
                <img src="Docs/ICONOS/Aceleradores WAN.png" id="imgAccWAN02" class="posImgAccWAN02"></img>

                <!--ELEMENTOS VPN 02-->
                <video src="Anims\WEBM\VPN_VP9.webm" autoplay muted id="VPN02" class="posVPN02"></video>
                <img src="Docs/ICONOS/VPN.png" id="imgVPN02" class="posImgVPN02"></img>

                <!--ELEMENTOS HIPERCONVERGENCIA 01-->
                <video src="Anims\WEBM\Hiperconvergencia_VP9.webm" autoplay muted id="Hiper01" class="posHiper01"></video>
                <img src="Docs/ICONOS/Hiperconvergencia.png" id="imgHiper01" class="posImgHiper01"></img>

                <!--ELEMENTOS HIC-->
                <video src="Anims\WEBM\nube pequeña_VP9.webm" autoplay muted id="Hic" class="posHic"></video>
                <video src="Anims\WEBM\nube pequeña_1_VP9.webm" autoplay loop muted id="Hic2" class="posHic2"></video>
                <img src="Docs/ICONOS/nube pequeña.png" id="imgHic" class="posImgHic"></img>

                <!--ELEMENTOS APLICATIVOS 02-->
                <video src="Anims\WEBM\Aplicativos_VP9.webm" autoplay loop muted id="Aplicativos02" class="posAplicativos02"></video>
                <img src="Docs/ICONOS/Aplicativos.png" id="imgAplicativos02" class="posImgAplicativos02"></img>

                <!--ELEMENTOS LAPTOP 02-->
                <video src="Anims\WEBM\Laptop_VP9.webm" autoplay muted id="Laptop02" class="posLaptop02"></video>
                <img src="Docs/ICONOS/Laptop.png" id="imgLaptop02" class="posImgLaptop02"></img>

                <!--ELEMENTOS PC 02-->
                <video src="Anims\WEBM\Computadora escritorio_VP9.webm" autoplay muted id="Pc02" class="posPc02"></video>
                <img src="Docs/ICONOS/Computadora escritorio.png" id="imgPc02" class="posImgPc02"></img>

                <!--ELEMENTOS DISK 01 -->
                <video src="Anims\WEBM\Almacenamiento (discos)_VP9.webm" autoplay muted id="Disk01" class="posDisk01"></video>
                <img src="Docs/ICONOS/Almacenamiento (discos).png" id="imgDisk01" class="posImgDisk01"></img>






                <!--ELEMENTOS GENERALES NUBE PRIVADA -->
                <!--ELEMENTOS NUBE PUBLICA-->
                <video src="Anims\WEBM\Letras nube_VP9.webm" autoplay muted id="NubePublica" class="posNubePublica"></video>
                <img src="Docs/ICONOS/Letras nube pública.png" id="imgNubePublica" class="posImgNubePublica"></img>

                <!--ELEMENTOS NUBE PRIVADA-->
                <video src="Anims\WEBM\nube mediana_VP9.webm" autoplay muted id="NubePrivada" class="posNubePrivada"></video>
                <img src="Docs/ICONOS/nube mediana.png" id="imgNubePrivada" class="posImgNubePrivada"></img>

                <!--ELEMENTOS CANDADO-->
                <video src="Anims\WEBM\Candado_VP9.webm" autoplay muted id="Lock" class="posLock"></video>
                <img src="Docs/ICONOS/Candado.png" id="imgLock" class="posImgLock"></img>






                <!--ELEMENTOS GENERALES SITIO ESPEJO -->
                <!--ELEMENTOS SITIO ESPEJO-->
                <video src="Anims\WEBM\Letras sitio espejo_VP9.webm" autoplay muted id="letrasSitioEspejo" class="posLetrasSitioEspejo"></video>
                <img src="Docs/ICONOS/Letras sitio espejo.png" id="imgLetrasSitioEspejo" class="posImgLetrasSitioEspejo"></img>

                <!--ELEMENTOS BRICK 03-->
                <video src="Anims\WEBM\Ladrillo_VP9.webm" autoplay muted id="Brick03" class="posBrick03"></video>
                <img src="Docs/ICONOS/Ladrillo.png" id="imgBrick03" class="posImgBrick03"></img>

                <!--ELEMENTOS LLAVE 03-->
                <video src="Anims\WEBM\Llave_VP9.webm" autoplay muted id="Llave03" class="posLlave03"></video>
                <img src="Docs/ICONOS/Llave.png" id="imgLlave03" class="posImgLlave03"></img>

                <!--ELEMENTOS ACELERADOR WAN 03-->
                <video src="Anims\WEBM\Aceleradores WAN_VP9.webm" autoplay muted id="AccWAN03" class="posAccWAN03"></video>
                <img src="Docs/ICONOS/Aceleradores WAN.png" id="imgAccWAN03" class="posImgAccWAN03"></img>

                <!--ELEMENTOS VPN 03-->
                <video src="Anims\WEBM\VPN_VP9.webm" autoplay muted id="VPN03" class="posVPN03"></video>
                <img src="Docs/ICONOS/VPN.png" id="imgVPN03" class="posImgVPN03"></img>

                <!--ELEMENTOS DISK 02-->
                <video src="Anims\WEBM\Almacenamiento (discos)_VP9.webm" autoplay muted id="Disk02" class="posDisk02"></video>
                <img src="Docs/ICONOS/Almacenamiento (discos).png" id="imgDisk02" class="posImgDisk02"></img>

                <!--ELEMENTOS LAPTOP 03-->
                <video src="Anims\WEBM\Laptop_VP9.webm" autoplay muted id="Laptop03" class="posLaptop03"></video>
                <img src="Docs/ICONOS/Laptop.png" id="imgLaptop03" class="posImgLaptop03"></img>

                <!--ELEMENTOS PC 03-->
                <video src="Anims\WEBM\Computadora escritorio_VP9.webm" autoplay muted id="Pc03" class="posPc03"></video>
                <img src="Docs/ICONOS/Computadora escritorio.png" id="imgPc03" class="posImgPc03"></img>

                <!--ELEMENTOS APLICATIVOS 03-->
                <video src="Anims\WEBM\Aplicativos_VP9.webm" autoplay muted id="Aplicativos03" class="posAplicativos03"></video>
                <img src="Docs/ICONOS/Aplicativos.png" id="imgAplicativos03" class="posImgAplicativos03"></img>

                <!--ELEMENTOS HIPERVISOR 03-->
                <video src="Anims\WEBM\Hipervisor_2_VP9.webm" autoplay muted id="Hipervisor03" class="posHipervisor03"></video>
                <img src="Docs/ICONOS/Hipervisor.png" id="imgHipervisor03" class="posImgHipervisor03"></img>

                <!--ELEMENTOS ROUTER 03-->
                <video src="Anims\WEBM\Switch 2_VP9.webm" autoplay muted id="Router03" class="posRouter03"></video>
                <img src="Docs/ICONOS/Switch.png" id="imgRouter03" class="posImgRouter03"></img>

                <!--ELEMENTOS WIFI 03-->
                <video src="Anims\WEBM\Wifi_VP9.webm" autoplay muted id="WiFi03" class="posWiFi03"></video>
                <img src="Docs/ICONOS/Wifi.png" id="imgWiFi03" class="posImgWiFi03"></img>

                <!--ELEMENTOS HIPERCONVERGENCIA 02-->
                <video src="Anims\WEBM\Hiperconvergencia_VP9.webm" autoplay muted id="Hiper02" class="posHiper02"></video>
                <img src="Docs/ICONOS/Hiperconvergencia.png" id="imgHiper02" class="posImgHiper02"></img>

                <!--ELEMENTOS HIC 02 -->
                <video src="Anims\WEBM\nube pequeña_VP9.webm" autoplay muted id="Hic02" class="posHic02"></video>
                <video src="Anims\WEBM\nube pequeña_1_VP9.webm" autoplay loop muted id="Hic4" class="posHic4"></video>
                <img src="Docs/ICONOS/nube pequeña.png" id="imgHic02" class="posImgHic02"></img>

                <!--ELEMENTOS FLECHASE-->
                <video src="Anims\WEBM\flecha horizontal_VP9.webm" autoplay muted id="FlechaSE" class="posFlechaSE"></video>
                <img src="Docs/ICONOS/flecha horizontal.png" id="imgFlechaSE" class="posImgFlechaSE"></img>







                <!--ELEMENTOS GENERALES SITIOS MOVILES -->
                <!--ELEMENTOS USUARIOS MOVILES-->
                <video src="Anims\WEBM\Letras usuarios móviles_VP9.webm" autoplay muted id="UsuariosMoviles" class="posUsuariosMoviles"></video>
                <img src="Docs/ICONOS/Letras usuarios móviles.png" id="imgUsuariosMoviles" class="posImgUsuariosMoviles"></img>

                <!--ELEMENTOS BRICK 04-->
                <video src="Anims\WEBM\Ladrillo_VP9.webm" autoplay muted id="Brick04" class="posBrick04"></video>
                <img src="Docs/ICONOS/Ladrillo.png" id="imgBrick04" class="posImgBrick04"></img>

                <!--ELEMENTOS BRICK 05-->
                <video src="Anims\WEBM\Ladrillo_VP9.webm" autoplay muted id="Brick05" class="posBrick05"></video>
                <img src="Docs/ICONOS/Ladrillo.png" id="imgBrick05" class="posImgBrick05"></img>

                <!--ELEMENTOS BRICK 06-->
                <video src="Anims\WEBM\Ladrillo_VP9.webm" autoplay muted id="Brick06" class="posBrick06"></video>
                <img src="Docs/ICONOS/Ladrillo.png" id="imgBrick06" class="posImgBrick06"></img>

                <!--ELEMENTOS APLICATIVOS 04-->
                <video src="Anims\WEBM\Aplicativos_VP9.webm" autoplay muted id="Aplicativos04" class="posAplicativos04"></video>
                <img src="Docs/ICONOS/Aplicativos.png" id="imgAplicativos04" class="posImgAplicativos04"></img>

                <!--ELEMENTOS APLICATIVOS 05-->
                <video src="Anims\WEBM\Aplicativos_VP9.webm" autoplay muted id="Aplicativos05" class="posAplicativos05"></video>
                <img src="Docs/ICONOS/Aplicativos.png" id="imgAplicativos05" class="posImgAplicativos05"></img>

                <!--ELEMENTOS APLICATIVOS 06-->
                <video src="Anims\WEBM\Aplicativos_VP9.webm" autoplay muted id="Aplicativos06" class="posAplicativos06"></video>
                <img src="Docs/ICONOS/Aplicativos.png" id="imgAplicativos06" class="posImgAplicativos06"></img>

                <!--ELEMENTOS LAPTOP 04-->
                <video src="Anims\WEBM\Laptop_VP9.webm" autoplay muted id="Laptop04" class="posLaptop04"></video>
                <img src="Docs/ICONOS/Laptop.png" id="imgLaptop04" class="posImgLaptop04"></img>

                <!--ELEMENTOS TABLET-->
                <video src="Anims\WEBM\Tablet_VP9.webm" autoplay muted id="Tablet" class="posTablet"></video>
                <img src="Docs/ICONOS/Tablet.png" id="imgTablet" class="posImgTablet"></img>

                <!--ELEMENTOS APLICATIVOS 06-->
                <video src="Anims\WEBM\Celular_VP9.webm" autoplay muted id="Movil" class="posMovil"></video>
                <img src="Docs/ICONOS/Celular.png" id="imgMovil" class="posImgMovil"></img>

                <!--ELEMENTOS LLAVE 04-->
                <video src="Anims\WEBM\Llave_VP9.webm" autoplay muted id="Llave04" class="posLlave04"></video>
                <img src="Docs/ICONOS/Llave.png" id="imgLlave04" class="posImgLlave04"></img>

                <!--ELEMENTOS ACELERADOR WAN 04-->
                <video src="Anims\WEBM\Aceleradores WAN_VP9.webm" autoplay muted id="AccWAN04" class="posAccWAN04"></video>
                <img src="Docs/ICONOS/Aceleradores WAN.png" id="imgAccWAN04" class="posImgAccWAN04"></img>

                <!--ELEMENTOS VPN 04-->
                <video src="Anims\WEBM\VPN_VP9.webm" autoplay muted id="VPN04" class="posVPN04"></video>
                <img src="Docs/ICONOS/VPN.png" id="imgVPN04" class="posImgVPN04"></img>

            </form>
            <?php include 'whatsapp.php'; ?>

    </body>
</html>

