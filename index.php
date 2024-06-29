<!DOCTYPE html>
<html lang="es">

<?php include("./layout/metadata.php"); ?>

<body>

    <?php include("./layout/navegacion.php"); ?>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpeg);">
                    <div class="carousel-container">
                        <!-- <div class="carousel-content animate__animated animate__fadeInUp">
                        <h2>Welcome to <span>Flattern</span></h2>
                        <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                        </div> -->
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpeg);">
                    <div class="carousel-container">
                        <!-- <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Lorem Ipsum Dolor</h2>
                            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil
                                ut aliquam.
                                Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus
                                repellendus
                                deleniti vel. Minus et tempore modi architecto.</p>
                            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                        </div> -->
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpeg);">
                    <div class="carousel-container">
                        <!-- <div class="carousel-content animate__animated animate__fadeInUp">
                            <h2>Sequi ea ut et est quaerat</h2>
                            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil
                                ut aliquam.
                                Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus
                                repellendus
                                deleniti vel. Minus et tempore modi architecto.</p>
                            <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
                        </div> -->
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
            </a>

            <ul class="list-slyle-none carousel-indicators" id="hero-carousel-indicators"></ul>

        </div>
    </section><!-- End Hero -->

    <?php require("./layout/modal.php"); ?>

    <main id="main">

        <!-- ======= Cta Section ======= -->
        <!-- <section id="cta" class="cta">
            <div class="container">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-left">
                        <h3>We've created more than <span>200 websites</span> this year!</h3>
                        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est
                            laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Request a quote</a>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <!-- <section id="services" class="services">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea
                                commodo consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu
                                fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt
                                mollit anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum
                                soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section> -->
        <!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Galeria de <strong>Imagenes</strong></h2>

                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todos</li>
                            <li data-filter=".filter-maquinaria">Maquinarias</li>
                            <li data-filter=".filter-obra">Obras</li>
                            <li data-filter=".filter-deporte">Deportes</li>
                        </ul>
                    </div>
                </div>

                
                <div class="row portfolio-container" data-aos="fade-up">

                    <!-- Maquinaria -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-maquinaria">
                        <img src="assets/img/galeria/maquinarias/maquinaria-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Maquinaria 1</h4>
                            <!-- <p>App</p> -->
                            <a href="assets/img/galeria/maquinarias/maquinaria-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maquinaria 1"><i class="bx bx-plus"></i></a>
                            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-maquinaria">
                        <img src="assets/img/galeria/maquinarias/maquinaria-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Maquinaria 2</h4>
                            <a href="assets/img/galeria/maquinarias/maquinaria-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maquinaria 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-maquinaria">
                        <img src="assets/img/galeria/maquinarias/maquinaria-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Maquinaria 3</h4>
                            <a href="assets/img/galeria/maquinarias/maquinaria-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Maquinaria 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <!-- Obra -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-obra">
                        <img src="assets/img/galeria/obras/obra-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Obra 1</h4>
                            <a href="assets/img/galeria/obras/obra-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Obra 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-obra">
                        <img src="assets/img/galeria/obras/obra-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Obra 2</h4>
                            
                            <a href="assets/img/galeria/obras/obra-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Obra 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-obra">
                        <img src="assets/img/galeria/obras/obra-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Obra 3</h4>
                            
                            <a href="assets/img/galeria/obras/obra-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Obra 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <!-- Deporte -->
                    <div class="col-lg-4 col-md-6 portfolio-item filter-deporte">
                        <img src="assets/img/galeria/deportes/deporte-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Deporte 1</h4>
                            <a href="assets/img/galeria/deportes/deporte-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Deporte 1"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-deporte">
                        <img src="assets/img/galeria/deportes/deporte-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Deporte 2</h4>
                            <a href="assets/img/galeria/deportes/deporte-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Deporte 2"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-deporte">
                        <img src="assets/img/galeria/deportes/deporte-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Deporte 3</h4>
                            <a href="assets/img/galeria/deportes/deporte-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Deporte 3"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Portfolio Section -->

        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Redes <strong>Sociales</strong></h2>

                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div data-aos="fade-down">
                            <p> #MásCarreterasParaNuestrosPueblos. </p>
                            <!-- <br/> -->
                            <p>💯✅𝑴Á𝑺 𝑫𝑬 𝑫𝑶𝑺 𝑴𝑰𝑳𝑳𝑶𝑵𝑬𝑺 600 𝑴𝑰𝑳 𝑺𝑶𝑳𝑬𝑺 𝑭𝑼𝑬𝑹𝑶𝑵 𝑫𝑬𝑺𝑻𝑰𝑵𝑨𝑫𝑶𝑺 𝑷𝑨𝑹𝑨 𝑳𝑨 𝑬𝑱𝑬𝑪𝑼𝑪𝑰Ó𝑵 𝑫𝑬 𝑳𝑨 𝑪𝑨𝑹𝑹𝑬𝑻𝑬𝑹𝑨 𝑪𝑶𝑵 𝑨𝑪𝑪𝑬𝑺𝑶 𝑫𝑬 𝑨𝑮𝑶𝑷𝑨𝑻𝑨, 𝑯𝑨𝑪𝑰𝑨 𝑳𝑨 𝑳𝑶𝑪𝑨𝑳𝑰𝑫𝑨𝑫 𝑫𝑬 𝑨𝑵𝑻𝑨𝑪𝑨𝑪𝑨. </p>
                            <p class="text-justify">🟢🚜Con el objetivo de enlazar latitudes de costumbres, intercambio de productos de pan llevar, la Municipalidad Distrital de Santa Ana de Tusi, a través de la Gerencia de Infraestructura y Desarrollo Urbano Rural, viene informando a cerca de la disponibilidad para el inicio de la obra: "Creación de la Trocha Carrozable en la Vía de Acceso entre las Localidades de Agopata, hacia el Caserío de Antacaca en el Distrito de Santa Ana de Tusi, Provincia Daniel Alcides Carrión, Departamento de Pasco"...</p>
                            <p>Buenas noticias y mas enterate en nuestro fanpage de facebook.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="text-center" data-aos="fade-up">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100070998202246&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=765295755269488" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- ======= Our Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Nuestros <strong>Aliados</strong></h2>
                    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                        Quia fugiat sit
                        in iste officiis commodi quidem hic quas.</p> -->
                </div>

                <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="./assets/img/clients/cl-contraloria.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="./assets/img/clients/cl-estado-peruano.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="./assets/img/clients/cl-indecopi.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="./assets/img/clients/cl-osiptel.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="./assets/img/clients/cl-pcm.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="./assets/img/clients/cl-reniec.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <!-- <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                        </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Our Clients Section -->

    </main><!-- End #main -->

    <?php include("./layout/footer.php"); ?>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            let myModal = new bootstrap.Modal(document.getElementById('initModal'), {
                focus: true
            })

            myModal.toggle();

        });
    </script>

</body>

</html>