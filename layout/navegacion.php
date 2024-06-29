<style>
    /* CSS personalizado para el efecto de hover */
    .logo:hover {
        transform: scale(1.2);
        transition: transform 0.3s ease-in-out;
    }

    .redes-hover:hover {
        transform: scale(1.8);
    }

    .muni-shadow {
        text-shadow: 3px 3px 2px rgba(0, 0, 0, 0.3);
    }

    .muni-shadow:hover {
        transform: scale(1.1);
        transition: transform 0.5s ease-in-out;
    }

    .h1-efecto {
        color: hsla(0, 0%, 0%, .9);
        font: normal 26px Varela Round, sans-serif;
        /* height: 140px; */
        /* left: 0; */
        letter-spacing: 5px;
        /* margin: 0px 0 0 0; */
        position: absolute;
        /* text-align: center; */
        text-transform: uppercase;
        /* top: 50%; */
        width: 100%;
        animation: move linear 9000ms infinite;
    }

    @keyframes move {
        0% {
            text-shadow:
                4px -4px 0 hsla(0, 100%, 50%, 1),
                3px -3px 0 hsla(0, 100%, 50%, 1),
                2px -2px 0 hsla(0, 100%, 50%, 1),
                1px -1px 0 hsla(0, 100%, 50%, 1),
                -4px 4px 0 hsla(180, 100%, 50%, 1),
                -3px 3px 0 hsla(180, 100%, 50%, 1),
                -2px 2px 0 hsla(180, 100%, 50%, 1),
                -1px 1px 0 hsla(180, 100%, 50%, 1);
        }

        25% {
            text-shadow:
                -4px -4px 0 hsla(180, 100%, 50%, 1),
                -3px -3px 0 hsla(180, 100%, 50%, 1),
                -2px -2px 0 hsla(180, 100%, 50%, 1),
                -1px -1px 0 hsla(180, 100%, 50%, 1),
                4px 4px 0 hsla(0, 100%, 50%, 1),
                3px 3px 0 hsla(0, 100%, 50%, 1),
                2px 2px 0 hsla(0, 100%, 50%, 1),
                1px 1px 0 hsla(0, 100%, 50%, 1);
        }

        50% {
            text-shadow:
                -4px 4px 0 hsla(0, 100%, 50%, 1),
                -3px 3px 0 hsla(0, 100%, 50%, 1),
                -2px 2px 0 hsla(0, 100%, 50%, 1),
                -1px 1px 0 hsla(0, 100%, 50%, 1),
                4px -4px 0 hsla(180, 100%, 50%, 1),
                3px -3px 0 hsla(180, 100%, 50%, 1),
                2px -2px 0 hsla(180, 100%, 50%, 1),
                1px -1px 0 hsla(180, 100%, 50%, 1);
        }

        75% {
            text-shadow:
                4px 4px 0 hsla(180, 100%, 50%, 1),
                3px 3px 0 hsla(180, 100%, 50%, 1),
                2px 2px 0 hsla(180, 100%, 50%, 1),
                1px 1px 0 hsla(180, 100%, 50%, 1),
                -4px -4px 0 hsla(0, 100%, 50%, 1),
                -3px -3px 0 hsla(0, 100%, 50%, 1),
                -2px -2px 0 hsla(0, 100%, 50%, 1),
                -1px -1px 0 hsla(0, 100%, 50%, 1);
        }

        100% {
            text-shadow:
                4px -4px 0 hsla(0, 100%, 50%, 1),
                3px -3px 0 hsla(0, 100%, 50%, 1),
                2px -2px 0 hsla(0, 100%, 50%, 1),
                1px -1px 0 hsla(0, 100%, 50%, 1),
                -4px 4px 0 hsla(180, 100%, 50%, 1),
                -3px 3px 0 hsla(180, 100%, 50%, 1),
                -2px 2px 0 hsla(180, 100%, 50%, 1),
                -1px 1px 0 hsla(180, 100%, 50%, 1);
        }
    }



    @import url(https://fonts.googleapis.com/css?family=Open+Sans:800);

    .text {
        fill: none;
        stroke-width: 6;
        stroke-linejoin: round;
        stroke-dasharray: 70 330;
        stroke-dashoffset: 0;
        -webkit-animation: stroke 6s infinite linear;
        animation: stroke 6s infinite linear;
    }

    .text:nth-child(5n + 1) {
        stroke: #F2385A;
        -webkit-animation-delay: -1.2s;
        animation-delay: -1.2s;
    }

    .text:nth-child(5n + 2) {
        stroke: #F5A503;
        -webkit-animation-delay: -2.4s;
        animation-delay: -2.4s;
    }

    .text:nth-child(5n + 3) {
        stroke: #E9F1DF;
        -webkit-animation-delay: -3.6s;
        animation-delay: -3.6s;
    }

    .text:nth-child(5n + 4) {
        stroke: #56D9CD;
        -webkit-animation-delay: -4.8s;
        animation-delay: -4.8s;
    }

    .text:nth-child(5n + 5) {
        stroke: #3AA1BF;
        -webkit-animation-delay: -6s;
        animation-delay: -6s;
    }

    @-webkit-keyframes stroke {
        100% {
            stroke-dashoffset: -400;
        }
    }

    @keyframes stroke {
        100% {
            stroke-dashoffset: -400;
        }
    }

    /* Other styles */
    /* html,
    body {
        height: 100%;
    }

    body {
        background: #212121;
        background-size: .2em 100%;
        font: 14.5em/1 Open Sans, Impact;
        text-transform: uppercase;
        margin: 0;
    }

    svg {
        position: absolute;
        width: 100%;
        height: 100%;
    } */
</style>


<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <!-- <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
            <a href="https://wa.me/51918490382" target="_blank"><i class="bi bi-whatsapp d-flex align-items-center ms-4"><span>918 490 382</span></i></a>
        </div> -->

        <div class="contact-info d-flex align-items-center">
            <h6 class="fw-bold fs-3 text-success muni-shadow">MUNICIPALIDAD DISTRITAL DE SANTA ANA DE TUSI</h6>
            <!-- <h5 class="h1-efecto">MUNICIPALIDAD DISTRITAL DE SANTA ANA DE TUSI</h6> -->

            <!-- <svg viewBox="0 0 1320 300">
                
                <symbol id="s-text">
                    <text text-anchor="middle" x="50%" y="50%" dy=".35em" font-size="50">
                        MUNICIPALIDAD DISTRITAL DE SANTA ANA DE TUSI
                    </text>
                </symbol>

                
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
                <use xlink:href="#s-text" class="text"></use>
            </svg> -->

        </div>

        <div class="social-links d-none d-md-flex align-items-center">
            <a title="whatsapp" href="https://wa.me/51918490382" class="whatsapp redes-hover" target="_blank"><i class="bi bi-whatsapp"></i></a>
            <a title="twitter" href="#" class="twitter redes-hover"><i class="bi bi-twitter"></i></a>
            <a title="facebook" href="#" class="facebook redes-hover"><i class="bi bi-facebook"></i></a>
            <a title="instagram" href="#" class="instagram redes-hover"><i class="bi bi-instagram"></i></a>
            <div>
                <a href="https://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=12160" target="_blank"><img src="../assets/img/portal-transparencia.png" width="100" class="border border-info rounded py-1" /></a>
            </div>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<div class="header-background py-3">
    <header id="header" class="d-flex align-items-center my-3">
        <div class="container d-flex justify-content-between">

            <div class="logo" data-toggle="tooltip" data-placement="bottom" title="ESCUDO MUNICIPALIDAD DISTRITAL DE SANTA ANA DE TUSI">
                <!-- <h1 class="text-light"><a href="../index.php">Flattern</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="../index.php"><img src="../assets/img/logo_png.png" alt="" class="img-fluid" width="100"></a>
            </div>

            <nav id="navbar" class="navbar fs-2">
                <ul>
                    <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                                echo 'class="active"';
                            } ?> class="fw-bold" href="../index.php">Inicio</a></li>
                    <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'nosotros.php') {
                                echo 'class="active"';
                            } ?> class="fw-bold" href="../nosotros.php">Nosotros</a></li>
                    <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'servicios.php') {
                                echo 'class="active"';
                            } ?> class="fw-bold" href="../servicios.php">Servicios</a></li>
                    <li class="dropdown fw-bold">
                        <a <?php
                            $gerenciasPages = array('g-planificacion.php', 'g-administracion.php', 'g-desarollo-humano.php', 'g-obras.php', 'g-medio-ambiente.php', 'g-municipal.php');
                            if (in_array(basename($_SERVER['PHP_SELF']), $gerenciasPages)) {
                                echo 'class="active"';
                            }
                            ?> href="#"><span>Gerencias</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="../g-planificacion.php">Planificación y Presupuesto</a></li>
                            <li><a href="../g-administracion.php">Administración y Finanzas</a></li>
                            <li><a href="../g-desarollo-humano.php">Desarollo Huamano</a></li>
                            <li><a href="../g-obras.php">Obras</a></li>
                            <li><a href="../g-medio-ambiente.php">Medio Ambiente</a></li>
                            <li><a href="../g-municipal.php">Municipal</a></li>

                            <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li> -->
                        </ul>
                    </li>
                    <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'funcionarios.php') {
                                echo 'class="active"';
                            } ?> class="fw-bold" href="../funcionarios.php">Funcionarios</a></li>
                    <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'directorio.php') {
                                echo 'class="active"';
                            } ?> class="fw-bold" href="../directorio.php">Directorio</a></li>
                    <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'contacto.php') {
                                echo 'class="active"';
                            } ?> class="fw-bold" href="../contacto.php">Contacto</a></li>

                    <!-- <li><a href="pricing.html">Pricing</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li> -->

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tooltips = document.querySelectorAll('[data-toggle="tooltip"]');
        tooltips.forEach(function(tooltip) {
            new bootstrap.Tooltip(tooltip);
        });
    });
</script>