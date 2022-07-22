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

    <!-- Page Header -->
    <header class="page__header">
      <div class="d--flex align-center">
        <h1 class="text--primary">About</h1>
        <div class="rectangular"></div>
      </div>
    </header>

    <!-- Our Company -->
    <section class="about-our-company body--color">
      <div class="container">
        <div class="grid grid-cols-2">
          <div class="img-col">
            <div class="div__img"></div>
            <div class="absolute-container btn--primary">
              <p class="absolute-container__text">
                Excepteur sint occaecat cupidatat non proident sunt in culpa qui
                officia.
              </p>
            </div>
            <!-- ideti zalia staciakampi su position: absolute; -->
          </div>
          <div class="text-col">
            <h2 class="about-our-company__title">
              <span class="text--primary">Our</span> Company
            </h2>
            <p class="about-our-company__description">
              Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
              natus error sit voluptatem accusantium dolore mque laudantium,
              totam rem aperiam eaque ipsa quae ab illo invent. Sed ut
              perspiciatis unde omnis.
            </p>
            <blockquote class="quote">
              <p class="quote__text">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </p>
            </blockquote>
            <p class="testimonial__name">Rudhi Sasmito</p>
            <p class="testimonial__qualification">
              &mdash; Head Of Opertations
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Services -->
    <section class="section__services-with-borders">
      <div class="d--flex">
        <h3 class="services-with-border__title">
          <span class="text--primary">Our</span> Services
        </h3>
      </div>
      <div class="container">
        <div class="grid grid-cols-3 cards">
          <div class="media-with-borders">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#analysis"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Financial Analysis</h6>
              <p class="media__description body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>

          <div class="media-with-borders">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#solutions"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Business Solutions</h6>
              <p class="media__description body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>

          <div class="media-with-borders">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#clients"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Client Management</h6>
              <p class="media__description body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>

          <div class="media-with-borders">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#online_consulting"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Online Consulting</h6>
              <p class="media__description body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>

          <div class="media-with-borders">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#opportunities"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">Business Opportunities</h6>
              <p class="media__description body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>

          <div class="media-with-borders">
            <div class="media__image">
              <svg class="card-icon">
                <use
                  xlink:href="assets\images\media_icons_sprite.svg#it_consulting"
                ></use>
              </svg>
            </div>
            <div class="media__body">
              <h6 class="media__title">IT Consulting</h6>
              <p class="media__description body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Company Value -->
    <section class="section__company-value">
        <div class="grid grid-cols-2">
          <div class="company-value__left-col body--color">
            <div class="value-container-left">
              <h3 class="value__title text--black ">
                <span class="text--primary">Company</span> Value
              </h3>
              <p class="value__text">
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
                <li class="list__item">
                  Consectetur adipisicing elit sed do eiusmod temporin cididunt ut
                  labore et dolore.
                </li>
              </ul>
              <a href="#"><button class="btn btn--primary">Learn More</button></a>
            </div>
          </div>
          <div class="value__dark-col text--white">
            <div class="value-dark__container">
              <h3 class="value__title">
                <span class="text--primary">Company</span> Value
              </h3>
              <div class="value-business__container">
                <p class="value__dark-text">
                  Business Solution
                </p>
                <div class="primary-color__div business-solution__div"></div>
                <div class="accent-color__div"></div>
              </div>
              <div class="value-business__container">
                <p class="value__dark-text">
                  Business Opportunities
                </p>
                <div class="primary-color__div business-opportunities__div"></div>
                <div class="accent-color__div"></div>
              </div>
              <div class="value-business__container">
                <p class="value__dark-text">
                  Business Consulting
                </p>
                <div class="primary-color__div business-consulting__div"></div>
                <div class="accent-color__div"></div>
              </div>
              <div class="value-business__container">
                <p class="value__dark-text">
                  Financial Services
                </p>
                <div class="primary-color__div business-services__div"></div>
                <div class="accent-color__div"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Team -->
    <section class="section__our-team">
      <div class="container">
        <h3 class="our-team__title">
          <span class="text--primary">Our</span> Team
        </h3>
        <div class="grid grid-cols-3">
          <div class="team__card">
            <div class="our-team-card__img"></div>
            <h4 class="card__name">
              John Doe
            </h4>
            <p class="card__specialty body--color">
              Founder & CEO
            </p>
            <div class="green__rectangle bg--primary"></div>
          </div>
          
          <div class="team__card">
            <div class="our-team-card__img"></div>
            <h4 class="card__name">
              Dedi Doe
            </h4>
            <p class="card__specialty body--color">
              Chief Finance Officer
            </p>
            <div class="green__rectangle bg--primary"></div>
          </div>

          <div class="team__card">
            <div class="our-team-card__img"></div>
            <h4 class="card__name">
              John Doe
            </h4>
            <p class="card__specialty body--color">
              Chief Marketing Officer
            </p>
            <div class="green__rectangle bg--primary"></div>
          </div>

        </div>
      </div>
    </section>

    <!-- Company logos -->
    <section class="section__company-logos about-page__company-logo">
      <div class="container">
        <div class="grid grid-cols-4">
          <img
            class="company__icon"
            src="assets\images\company_logos\company_first.svg#company_first"
            alt=""
          />
          <img
            class="company__icon"
            src="assets\images\company_logos\company_second.svg#company_second"
            alt=""
          />
          <img
            class="company__icon"
            src="assets\images\company_logos\company_third.svg#company_third"
            alt=""
          />
          <img
            class="company__icon"
            src="assets\images\company_logos\company_fourth.svg#company_fourth"
            alt=""
          />
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php
    include 'footer.php';
    ?>

    <!-- Scripts -->
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
