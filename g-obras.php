<!DOCTYPE html>
<html lang="es">

<?php include("./layout/metadata.php"); ?>

<body>

    <?php include("./layout/navegacion.php"); ?>

    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gerencia - Obras</h2>
                    <p class="text-start">
                        La Gerencia de Obras en la municipalidad es el motor que impulsa el desarrollo y la mejora de la infraestructura pública. Esta área se encarga de planificar, coordinar y ejecutar proyectos de construcción, mantenimiento y desarrollo de obras públicas dentro del municipio.
                    </p>
                    <br>
                    <p class="text-start">
                        Su labor abarca desde la planificación inicial de proyectos hasta la supervisión de su ejecución, garantizando que las obras se realicen de manera eficiente, segura y en cumplimiento con las normativas vigentes. Se enfoca en la construcción y mantenimiento de calles, aceras, parques, sistemas de drenaje, iluminación pública y otros elementos fundamentales para el funcionamiento de la comunidad.
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
                                        <td class="fs-6">Gerencia de Obras</td>
                                        <td>
                                            <a class="btn btn-sm bg-danger rounded" href="./src/ppt/GERENCIA DE OBRAS.pptx" download="Presentación.pptx"><span class="text-white">ppt</span></a>
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