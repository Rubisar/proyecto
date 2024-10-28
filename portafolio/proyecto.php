<?php
require 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubi sarmiento</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="bg-nav">
        <nav class="navbar navredes">
            <a href="https://www.facebook.com"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-facebook" width="32" height="32" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                </svg></a>
            <a href="https://www.instagram.com/"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-instagram" width="32" height="32" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
                    <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M16.5 7.5l0 .01" />
                </svg></a>
            <a href="https://www.tiktok.com/discover?lang=es"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-tiktok" width="32" height="32" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M21 7.917v4.034a9.948 9.948 0 0 1 -5 -1.951v4.5a6.5 6.5 0 1 1 -8 -6.326v4.326a2.5 2.5 0 1 0 4 2v-11.5h4.083a6.005 6.005 0 0 0 4.917 4.917z" />
                </svg></a>
                <button class="btnmenu" id="btnmenu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="32"
                    height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
                </button>
        </nav>
        <nav class="navbar" id="navbar">
            <a href="index.html">inicio</a>
            <a href="sobremi.html">Sobre mi</a>
            <a href="proyectos.html">proyectos</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </div>

    <h2>Mis proyectos</h2>
    <main class="container">
        <div class="proyectos">
            <div class="proyecto">
                <h2>juego de memoria</h2>
                <div class="img">
                    <img src="imge/Nueva carpeta (2)jg/Nueva carpeta/th.jpg"
                        alt="foto de pagina tecnologia">
                </div>
                <div>
                    <p>Este en el primer juego que hice cuando comense a programar con una instructora del Sena de un
                        curso complementario</p>
                </div>
                <div class="e">
                    <a href="img/juegos/juego de memoria/"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-juejin" width="52" height="52" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M2 12l10 7.422l10 -7.422" />
                            <path d="M7 9l5 4l5 -4" />
                            <path d="M11 6l1 .8l1 -.8l-1 -.8z" />
                        </svg></a>
                </div>
            </div>
            <div class="proyecto">
                <h2>atrapame si puedes</h2>
                <div class="img">
                    <img src="./img/Nueva carpeta/Captura de pantalla 2024-08-12 121010.png"
                        alt="foto de pagina tecnologia">
                </div>
                <div>
                    <p>Este fue mi segundo juego con la instructora del curso complementario</p>
                </div>
                <div class="e">
                    <a href="img/juegos/juego de la pelotica/"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-circles" width="52" height="52" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M6.5 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M17.5 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        </svg></a>
                </div>

            </div>
            <div class="proyecto">
                <h2>imagenes girasoles</h2>
                <div class="img">
                    <img src="imge/Nueva carpeta (2)jg/Nueva carpeta/th (1).jpg"
                        alt="foto de pagina tecnologia">
                </div>
                <div>
                    <p>Esta fue en donde hicimos un código para que las imagenes se puedan usar y para ponerlas
                        en una pagina</p>
                </div>
                <div class="e">
                    <a href="img/Nueva carpeta/IMAGENES/imagenes.html"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cannabis" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 20s0 -2 1 -3.5c-1.5 0 -2 -.5 -4 -1.5c0 0 1.839 -1.38 5 -1c-1.789 -.97 -3.279 -2.03 -5 -6c0 0 3.98 -.3 6.5 3.5c-2.284 -4.9 1.5 -9.5 1.5 -9.5c2.734 5.47 2.389 7.5 1.5 9.5c2.531 -3.77 6.5 -3.5 6.5 -3.5c-1.721 3.97 -3.211 5.03 -5 6c3.161 -.38 5 1 5 1c-2 1 -2.5 1.5 -4 1.5c1 1.5 1 3.5 1 3.5c-2 0 -4.438 -2.22 -5 -3c-.563 .78 -3 3 -5 3z" />
                        <path d="M12 22v-5" />
                        </svg></a>
                </div>
            </div>
            <div class="proyecto">
                <h2>mario bro</h2>
                <div class="img">
                    <img src="./img/Nueva carpeta/Captura de pantalla 2024-08-12 121128.png"
                        alt="foto de pagina tecnologia">
                </div>
                <div>
                    <p>Esta fue una evaluación en donde teniamos que aser que mario se madiera de lado a lado</p>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>todos los derechos reservados a Rubi sarmiento &copy; 2024</p>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>