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

    <!-- Page header -->
    <body>
      <header class="page__header">
        <div class="d--flex align-center">
          <h1 class="text--primary">Services</h1>
          <div class="rectangular"></div>
        </div>
      </header>
    </body>

    <!-- Services -->
    <section class="section__services services_page__services">
      <div class="container">
        <div class="grid grid-cols-3 cards">
          <div class="media">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#analysis"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Financial Analysis</h6>
              <p class="media__text body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
              <a class="services__link text--primary" href="./service single.php">Read more</a>
            </div>
          </div>

          <div class="media">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#solutions"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Business Solutions</h6>
              <p class="media__text body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
              <a class="services__link text--primary" href="./service single.php">Read more</a>
            </div>
          </div>

          <div class="media">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#clients"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Client Management</h6>
              <p class="media__text body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
              <a class="services__link text--primary" href="./service single.php">Read more</a>
            </div>
          </div>

          <div class="media">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#online_consulting"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Online Consulting</h6>
              <p class="media__text body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
              <a class="services__link text--primary" href="./service single.php">Read more</a>
            </div>
          </div>

          <div class="media">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#opportunities"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Business Opportunities</h6>
              <p class="media__text body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
              <a class="services__link text--primary" href="./service single.php">Read more</a>
            </div>
          </div>

          <div class="media">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#it_consulting"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">IT Consulting</h6>
              <p class="media__text body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
              <a class="services__link text--primary" href="./service single.php">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

    <!-- scripts -->
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
