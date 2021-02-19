<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }

    // session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Podcast resposive</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3be38b6456.js" crossorigin="anonymous"></script>
    <link rel="icon" href="./img/logo.ico">
</head>
<body>
    <header class="header">
        <img class="logo" src="./img/logo.svg" alt="">
        <nav>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
                <ul class="menu">
                    <li><a href="#episodios">EPISODIOS</a></li>
                    <li><a href="#nosotros">NOSOTROS</a></li>
                    <li><a href="#galerias">ENTREVISTAS</a></li>
                    <li><a href="#temario">TÓPICOS</a></li>
                    <li><a href="php/cerrar_sesion.php">CERRAR SESIÓN</a></li>
                </ul>
        </nav>
    </header>
    <section class="wrapper">
            <h1>Hello <s>world</s> pale blue dot<span class="blue">.</span></h1>
            <div class="primero">    
                <p>El portal de podcast que explora al mundo de la programacion y la tecnologia. Nuevos episodio, todos los jueves cada 15 dias.</p>
            </div>
            <div class="mitad">
                <a href="" id="boton" class="boton">CONOCÉ MÁS</a>
            </div>
    </section>
    <section class="paralelogramo" id="episodios">
        <div class="episodio" id="epi">
            <div class="jerarquia">    
                <h2>Episodios</h2>
                <div class="alinear">
                    <div class="seccion1">
                        <iframe class="spo1" src="https://open.spotify.com/embed-podcast/episode/4zny61x3ePWE0oAJ4OsoFB" allow="encrypted-media"></iframe>
                        <iframe class="spo2" src="https://open.spotify.com/embed-podcast/episode/1Mx2KrBkvFS6LWD23nP7vc" allow="encrypted-media"></iframe>
                    </div>
                    <div class="seccion2">    
                        <iframe class="spo1" src="https://open.spotify.com/embed-podcast/episode/0BgNZpm13a3gJXxzYumAPV" allow="encrypted-media"></iframe>
                        <iframe class="spo2" src="https://open.spotify.com/embed-podcast/episode/0WORYYDcXIC1gWyfDuScUV" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="nosotros">
        <div class="abajo">
            <img class="phone" src="./img/phone.png" alt="">
        </div>
        <div class="texto">
            <h3>De dónde venimos</h3>
            <p class="phonep">Augusta Ada King, condesa de Lovelace (Londres, 10 de diciembre de 1815-íd., 27 de noviembre de 1852), 
            registrada al nacer como Augusta Ada Byron y conocida habitualmente como Ada Lovelace, 
            fue una matemática, informática y escritora británica, célebre sobre todo por su trabajo acerca de la calculadora de uso general de Charles Babbage, 
            la denominada máquina analítica. Entre sus notas sobre la máquina, se encuentra lo que se reconoce hoy como el primer algoritmo destinado a ser procesado por una máquina, 
            por lo que se la considera como la primera programadora de ordenadores.</p>
        </div>
    </section>
    <section class="fotos" id="galerias">
        <h4>Invitadas/os estelares</h4>
        <div class="galeria1">  
            <img class="foto" src="./img/gracehopper.png" alt="gracehopper">
            <img class="foto" src="./img/KatieBouman.png" alt="KatieBouman">
            <img class="foto" src="./img/MargaretHamilton.png" alt="MargaretHamilton">
        </div>
        <div class="galeria2">
            <img class="foto" src="./img/computer1950.png" alt="computer1950">
            <img class="foto" src="./img/operators.png" alt="Computer operators">
            <img class="foto" src="./img/susankare.png" alt="susankare">
        </div>
    </section>
    <section class="temario" id="temario">
        <h5>Algunos de nuestros temas</h5>
        <div class="temas">
            <div class="cuadro" >
                <div class="cajita">
                    <div class="icon">
                        <img class="img" src="./img/icon1.svg" alt="">
                    </div>
                    <div class="titulo">Trabajo remoto</div>
                    </div>
                <div class="cajita">
                    <div class="icon">
                        <img class="img" src="./img/icon2.svg" alt="">
                    </div>
                        <div class="titulo">Repensando la programacion</div>
                </div>
                <div class="cajita">
                    <div class="icon">
                        <img class="img" src="./img/icon3.svg" alt="">
                    </div>
                        <div class="titulo">Bases del código</div>
                </div>
                <div class="cajita">
                    <div class="icon">
                        <img class="img" src="./img/icon4.svg" alt="">
                    </div>
                        <div class="titulo">Seguriadad Informática</div>
                </div>
            </div>
        </div>
    </section>
    <section class="novedades">
        <div class="novedades2">
            <div class="nov">
                <h6>¿Querés las últimas novedades?</h6>
                </div>
                <div class="orden">
                    <a href="" class="boton">ESCUCHA LOS EPISODIOS</a>
                </div>
            </div>
    </section>
    <footer class="footer">
        <div class="cajon">
            <div class="copy">&copy; 2019- Hello blue pale dot</div>
            <div class="foot">
                <a class="fab fa-spotify" href="https://www.spotify.com/ar/"></a>
                <a class="fab fa-instagram" href="https://www.instagram.com/?hl=es-la"></a>
                <a class="fab fa-twitter" href="https://twitter.com/home"></a>
                <a class="fab fa-facebook" href="https://www.facebook.com/"></a>
                <a class="fab fa-telegram" href="https://web.telegram.org/#/login"></a>
            </div>
        </div>
    </footer>
</body>
</html>