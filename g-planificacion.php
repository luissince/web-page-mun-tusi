<!DOCTYPE html>
<html lang="es">

<?php include("./layout/metadata.php"); ?>

<body>

    <?php include("./layout/navegacion.php"); ?>

    <main id="main">

        <!-- <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Gerancia</h2>
                    <ol>
                        <li><a href="./index.php"><span class="text-white fw-bold">Inicio</span></a></li>
                        <li>Planificación</li>
                    </ol>
                </div>
            </div>
        </section> -->

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gerencia - Planificación y Presupuesto</h2>
                    <p class="text-start">
                        La Gerencia de Planificación y Presupuesto en la municipalidad es el motor estratégico que impulsa el desarrollo sostenible y la eficiencia financiera dentro de la comunidad. Esta área es responsable de trazar las directrices a largo plazo para el crecimiento urbano, coordinando planes integrales que abarcan desde el uso del suelo hasta la infraestructura y servicios públicos.
                    </p>
                    <br>
                    <p class="text-start">
                        Su labor consiste en analizar las necesidades actuales y futuras del municipio, identificar áreas de mejora y diseñar estrategias para el desarrollo equilibrado y sostenible. Además, esta gerencia juega un papel crucial en la gestión presupuestaria, asegurando que los recursos disponibles se asignen de manera eficiente y transparente para cumplir con las metas y objetivos establecidos en los planes estratégicos.
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
                                        <td class="fs-6">Gerancia de Planificacion y Presupuesto</td>
                                        <td>
                                            <a class="btn btn-sm bg-danger rounded" href="./src/ppt/GERENCIA Y PRESUPUESTO.pptx" download="Presentación.pptx"><span class="text-white">ppt</span></a>
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