<!DOCTYPE html>
<html lang="es">

<?php include("./layout/metadata.php"); ?>

<body>

    <?php include("./layout/navegacion.php"); ?>

    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gerencia - Municipal</h2>
                    <p class="text-start">
                        La Gerencia Municipal es el epicentro de la coordinación estratégica y la gestión integral de todos los departamentos y áreas de nuestra municipalidad. Es responsable de liderar, planificar y supervisar el funcionamiento general de la entidad local.
                    </p>
                    <br>
                    <p class="text-start">
                        Su labor abarca la implementación de políticas, la toma de decisiones estratégicas y la coordinación de acciones entre los diferentes departamentos. Además, se encarga de asegurar el cumplimiento de las normativas locales, la eficiencia en la prestación de servicios municipales y la optimización de recursos disponibles.
                    </p>

                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-12 mb-3 mb-lg-0" data-aos="fade-right">
                        <h5 class="text-primary">Documentos</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr class="table-primary">
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Ver</th>
                                    </tr>
                                </thead>
                                <tbody id="listTable">
                                    <tr>
                                        <td class="fs-6">1</td>
                                        <td class="fs-6">GERENCIA MUNICIPAL</td>
                                        <td>
                                            <a class="btn btn-sm bg-danger rounded" href="./src/ppt/Gerencia municipal.pptx" download="Presentación.pptx"><span class="text-white">ppt</span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </main>



    <?php include("./layout/footer.php"); ?>
</body>