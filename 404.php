<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@900&family=Open+Sans&family=Roboto&display=swap"
      rel="stylesheet"
    />
    <!-- CSS styles -->
    <?php
      include 'css_import.php';
    ?>
    <title>Document</title>
  </head>
  <body>
    <!-- Navbar -->
    <?php
    include 'navbar.php';
    ?>

    <!-- Page img -->
    <section class="section__404-error">
      <div class="container__404">
        <div class="error__container text-align-center">
          <h2 class="error__title">Oh no, something went wrong!</h2>
          <p class="error__description body--color">
            We provide a professional service for private and commercial
            customers.
          </p>
        </div>
      </div>
      <div class="btn__container justify-center">
        <a href="#">
          <div class="btn btn--primary">Back to Home</div>
        </a>
      </div>
    </section>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="./assets/js/custom.js"></script>
  </body>
</html>
