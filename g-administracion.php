<!DOCTYPE html>
<html lang="es">

<?php include("./layout/metadata.php"); ?>

<body>

    <?php include("./layout/navegacion.php"); ?>

    <main id="main">

        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gerencia - Administración y Finanzas</h2>
                    <p class="text-start">
                        La Gerencia de Administración en la municipalidad es el eje fundamental que sostiene y optimiza las operaciones internas. Esta área es la encargada de gestionar los recursos humanos, financieros y materiales para asegurar el funcionamiento eficiente y efectivo de la entidad municipal.
                    </p>
                    <br>
                    <p class="text-start">
                        Su labor abarca una amplia gama de responsabilidades, desde la gestión del personal y la nómina hasta la administración de los activos y la logística interna. Se encarga de establecer y aplicar políticas que garanticen la transparencia y eficiencia en los procesos administrativos, así como el cumplimiento de normativas legales y fiscales.
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
                                        <td class="fs-6">Gerancia de administracioón</td>
                                        <td>
                                            <a class="btn btn-sm bg-danger rounded" href="./src/ppt/GERENCIA DE ADMINISTRACION.pptx" download="Presentación.pptx"><span class="text-white">ppt</span></a>
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