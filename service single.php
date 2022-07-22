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
          <h1 class="text--primary">Financial Analysis</h1>
          <div class="rectangular"></div>
        </div>
      </header>
    </body>

    <!-- Company Value -->
    <section class="financial__company-value">
      <div class="financial-container">
        <div class="grid grid-cols-2">
          <div class="company-value__left-col body--color">
            <div class="value-container-left-home">
              <h3 class="value__title text--black">
                <span class="text--primary">Company</span> Value
              </h3>
              <p class="value__text">
                Teritatis et quasi architecto. Sed ut perspiciatis unde omnis
                iste natus error sit voluptatem accusantium dolore mque
                laudantium, totam rem aperiam eaque ipsa quae ab illo invent.
                Sed ut perspiciatis unde omnis.
              </p>
              <ul class="list--tick">
                <li class="list__item">
                  Excepteur sint occaecat cupidatat non proident sunt in culpa
                  qui officia deserunt mollit anim.
                </li>
                <li class="list__item">
                  Duis aute irure dolor in reprehenderit in voluptate velit
                  esse.
                </li>
                <li class="list__item">
                  Consectetur adipisicing elit sed do eiusmod temporin cididunt
                  ut labore et dolore.
                </li>
              </ul>
              <p>
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>
          <div class="value__img-col"></div>
        </div>
        <div class="financial__bg-rectangle bg--primary"></div>
      </div>
    </section>

    <!-- Business Solutions -->
    <section class="section__solutions">
      <div class="container">
        <div class="grid grid-cols-2">
          <div class="solutions__img-col">
            <img
              class="business-solution__img"
              src="assets\images\business solution diagram.svg"
              alt=""
            />
          </div>
          <div class="solutions__text-col body--color">
            <h3 class="solutions__title">
              <span class="text--primary">Business</span> Solutions
            </h3>
            <p class="solutions__text">
              Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
              natus error sit voluptatem accusantium dolore mque laudantium,
              totam rem aperiam eaque ipsa quae ab illo invent. Sed ut
              perspiciatis unde omnis.
            </p>
            <ul class="list--tick">
              <li class="list__item">
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                officia deserunt mollit anim.
              </li>
              <li class="list__item">
                Duis aute irure dolor in reprehenderit in voluptate velit esse.
              </li>
            </ul>
            <p class="">
              Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
              minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section
      class="section__services services_page__services financial-services"
    >
      <div class="d--flex justify-center">
        <h3 class="services__title section--title">
          <span class="text--primary">Our</span> Services
        </h3>
      </div>
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
              <a class="services__link text--primary" href="#">Read more</a>
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
              <a class="services__link text--primary" href="#">Read more</a>
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
              <a class="services__link text--primary" href="#">Read more</a>
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
              <a class="services__link text--primary" href="#">Read more</a>
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
              <a class="services__link text--primary" href="#">Read more</a>
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
              <a class="services__link text--primary" href="#">Read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Pricing -->
    <section class="section__financ-our-pricing">
      <div class="container">
        <div class="d--flex justify-center">
          <h3 class="our-pricing__title section--title">
            <span class="text--primary">Our</span> Pricing
          </h3>
        </div>
        <div class="grid grid-cols-3">
          <!-- first card -->
          <div class="pricing__card body--color">
            <p class="pricing__plan text-align-center">Starter</p>
            <p class="pricing__price bold-lato-text text-align-center">Free</p>
            <p class="pricing__description italic--text text-align-center">
              for up to 2 editors and 3 projects
            </p>

            <ul class="list features__list">
              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">3 projects</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">30-day version history</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">Up to 2 editors</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">Unlimited cloud storage</p>
                </div>
              </li>
            </ul>

            <a href="#">
              <div class="btn btn--primary pricing__btn">Get Now</div>
            </a>
          </div>

          <!-- second card -->
          <div class="popular-pricing__card bg--primary text--white">
            <div class="popular__rectangle text--black">popular</div>
            <p class="pricing__plan text-align-center">Professional</p>
            <p class="pricing__price bold-lato-text text-align-center">
              $9.99/mo
            </p>
            <p class="pricing__description italic--text text-align-center">
              for up to 2 editors and 3 projects
            </p>

            <ul class="list features__list">
              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="assets\images\pricing tick white.svg"
                    alt=""
                  />
                  <p class="feature__description">3 projects</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="assets\images\pricing tick white.svg"
                    alt=""
                  />
                  <p class="feature__description">30-day version history</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="assets\images\pricing tick white.svg"
                    alt=""
                  />
                  <p class="feature__description">Up to 2 editors</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="assets\images\pricing tick white.svg"
                    alt=""
                  />
                  <p class="feature__description">Unlimited cloud storage</p>
                </div>
              </li>
            </ul>

            <a href="#">
              <div class="btn btn--black pricing__btn">Get Now</div>
            </a>
          </div>

          <!-- third card -->
          <div class="pricing__card body--color">
            <p class="pricing__plan text-align-center">Organization</p>
            <p class="pricing__price bold-lato-text text-align-center">
              $19.99/mo
            </p>
            <p class="pricing__description italic--text text-align-center">
              for up to 2 editors and 3 projects
            </p>

            <ul class="list features__list">
              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">3 projects</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">30-day version history</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">Up to 2 editors</p>
                </div>
              </li>

              <li class="pricing__feature">
                <div class="d--flex">
                  <img
                    class="pricing__tick"
                    src="./assets/images/pricing feature tick.svg"
                    alt=""
                  />
                  <p class="feature__description">Unlimited cloud storage</p>
                </div>
              </li>
            </ul>

            <a href="#">
              <div class="btn btn--primary pricing__btn">Get Now</div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Client says -->
    <section class="section__client-says">
      <div class="d--flex justify-center">
        <h3 class="client-says__title section--title">
          <span class="text--primary">Client</span> Says
        </h3>
      </div>
      <div class="container">
        <div class="grid grid-cols-2">
          <div class="comment__container body--color">
            <p class="client-comment italic--text">
              Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
              natus error sit voluptatem accusantium dolore mque laudantium.
            </p>
            <img
              class="absolute-quotes"
              src="assets\images\client card quotes.svg"
              alt=""
            />
            <div class="d--flex client-info">
              <div class="client-img bg--accent"></div>
              <div class="client__container">
                <p class="client-name bold-lato-text text--black">
                  Rushi Sasmito
                </p>
                <p class="client-company italic--text">ABC Company</p>
              </div>
            </div>
          </div>

          <div class="comment__container body--color">
            <p class="client-comment italic--text">
              Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
              natus error sit voluptatem accusantium dolore mque laudantium.
            </p>
            <img
              class="absolute-quotes"
              src="assets\images\client card quotes.svg"
              alt=""
            />
            <div class="d--flex client-info">
              <div class="client-img bg--accent"></div>
              <div class="client__container">
                <p class="client-name bold-lato-text text--black">Sam</p>
                <p class="client-company italic--text">Company ABC</p>
              </div>
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
