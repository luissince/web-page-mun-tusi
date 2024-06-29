<!DOCTYPE html>
<html lang="es">


<?php include("./layout/metadata.php"); ?>

<body>

<?php include("./layout/navegacion.php"); ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contacto</h2>
          <ol>
            <li><a href="./index.php"><span class="text-white fw-bold">Inicio</span></a></li>
            <li>Contacto</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2471.557653265992!2d-76.35511043087621!3d-10.4727791659249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91080517a70c312d%3A0x81adb48b17ec78a1!2sMunicipalidad%20distrital%20de%20Santa%20Ana%20de%20Tusi!5e0!3m2!1ses-419!2spe!4v1700769893267!5m2!1ses-419!2spe" frameborder="0" allowfullscreen></iframe>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2471.557653265992!2d-76.35511043087621!3d-10.4727791659249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91080517a70c312d%3A0x81adb48b17ec78a1!2sMunicipalidad%20distrital%20de%20Santa%20Ana%20de%20Tusi!5e0!3m2!1ses-419!2spe!4v1700769893267!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localización:</h4>
                  <p>Plaza principal del distrito de Santa Ana de Tusi</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>
                    contact@example.com
                    <!-- <br>info@example.com</p> -->
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Central Telefónica:</h4>
                  <p>
                    918 490 382
                    <!-- <br>+1 5589 22475 14 -->
                  </p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <!-- <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div> -->

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include("./layout/footer.php"); ?>

</body>

</html>