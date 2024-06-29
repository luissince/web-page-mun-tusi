<!DOCTYPE html>
<html lang="es">

<?php include("./layout/metadata.php"); ?>

<body>

    <?php include("./layout/navegacion.php"); ?>

    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gerencia - Medio Ambiente</h2>
                    <p class="text-start">
                        La Gerencia de Medio Ambiente en la municipalidad es el motor que impulsa la preservación y el cuidado de los recursos naturales, así como la promoción de prácticas sostenibles dentro del entorno urbano.
                    </p>
                    <br>
                    <p class="text-start">
                        Esta área se enfoca en diseñar y ejecutar políticas, programas y proyectos que protejan el medio ambiente local. Trabaja en la conservación de áreas verdes, la gestión de residuos, la calidad del aire y del agua, así como en la promoción de prácticas amigables con el entorno.
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
                                        <td class="fs-6">Gerencia medio ambiente II Audiencia</td>
                                        <td>
                                            <a class="btn btn-sm bg-danger rounded" href="./src/ppt/GERENCIA MEDIO AMBIENTE II AUDIENCIA.pptx" download="Presentación.pptx"><span class="text-white">ppt</span></a>
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