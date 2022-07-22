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
    <title>Manice home page</title>
  </head>
  <body>

    <!-- Navbar -->
    <?php 
    include 'navbar.php';
    ?>

    <!-- Hero -->
    <section class="section__hero">
      <div class="container">
        <div class="hero">
          <h1 class="hero__title text--white">
            We are driven to create a better financial future
          </h1>
          <p class="hero__text text--white">
            Our professional team works to increase productivity and cost
            effectiveness on the market.
          </p>
          <div class="d--flex">
            <a href="./about.php"><button class="btn btn--black">Learn More</button></a>
            <a href="./contacts.php"><button class="btn btn--primary">Contact Us</button></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Business solution -->
    <section class="section__business-solutions">
      <div class="container bg--white">
        <div class="grid grid-cols-2">
          <div class="business__text__col">
            <h5 class="business__header">Business Solutions</h5>
            <p class="business__text body--color">
              Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
              natus error sit voluptatem accusantium dolore mque laudantium,
              totam rem aperiam eaque ipsa quae ab illo invent. Sed ut
              perspiciatis unde omnis.
            </p>
            <a href="#"><img src="./assets/images/arrow.png" alt="" /></a>
          </div>
          <div class="video__col">
            <video controls class="business__video" src=""></video>
          </div>
        </div>
      </div>
    </section>

    <!-- Section statistics -->
    <section class="section__statistics">
      <div class="container">
        <div class="grid grid-cols-4">
          <h3 class="statistics__title text--primary">
            Experienced in mortgage and financial advice!
          </h3>

          <p class="statistics__text">
            Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
            natus error sit voluptatem accusantium dolore mque laudantium, totam
            rem aperiam eaque ipsa quae ab illo invent. Sed ut perspiciatis unde
            omnis.
          </p>

          <div class="statistics__col">
            <p class="statistic__count">734</p>
            <p class="statistics__name">Satisfied Customers</p>
          </div>

          <div class="statistics__col">
            <p class="statistic__count">542</p>
            <p class="statistics__name">Consulteds</p>
          </div>

          <div class="statistics__col">
            <p class="statistic__count">17</p>
            <p class="statistics__name">Years Experience</p>
          </div>

          <div class="statistics__col">
            <p class="statistic__count">324</p>
            <p class="statistics__name">Finance Help</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Company Value -->
    <section class="section__value body--color">
      <div class="value-container">
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
              <a href="./about.php"><button class="btn btn--primary">Learn More</button></a>
            </div>
          </div>
          <div class="value__img-col"></div>
          <div class="bg-rectangle"></div>
        </div>
      </div>
    </section>

    <!-- Our Services -->
    <section class="section__services">
      <div class="d--flex justify-center">
        <h3 class="services__title">
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
              <p class="body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
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
              <p class="body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
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
              <p class="body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
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
              <p class="body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
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
              <p class="body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
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
              <p class="body-color">
                Duis aute irure dolor in reprehenderit in voluptate velit
                essecillum dolore eu fugiat nulla pariatur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Customers trust -->
    <section class="section__cutomers-trust bg--primary">
      <div class="d--flex">
        <h3 class="customers-trust__title">
          All of our customers trust their success to us
        </h3>
        <p class="customers-trust__description">
          Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
          natus error sit voluptatem accusantium dolore mque laudantium, totam
          rem aperiam eaque ipsa quae ab illo invent. Sed ut perspiciatis unde
          omnis.
        </p>
      </div>
    </section>

    <!-- Testimonial section -->
    <section class="section__testimonial text--white">
      <div class="container">
        <blockquote class="quote">
          <p class="quote__text">
            Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste
            natus error sit voluptatem accusantium dolore mque laudantium, totam
            rem aperiam eaque ipsa quae ab illo invent. Sed ut perspiciatis unde
            omnis.
          </p>
        </blockquote>
        <p class="testimonial__name">Rudhi sasmito</p>
        <p class="testimonial__qualification">&mdash; Head Of Opertations</p>
      </div>
    </section>

    <!-- Company logos -->
    <section class="section__company-logos">
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

    <!-- Recent news cards -->
    <section class="section__recent-news">
      <div class="d--flex title__container">
        <h3 class="news__title">
          <span class="text--primary">Recent </span>News
        </h3>
      </div>

      <div class="container">
        <div class="grid grid-cols-3">
          <div class="card body--color">
            <div class="card__img"></div>
            <h4 class="card__title text--black">
              Reprehenderit in voluptate velit esse cillum
            </h4>
            <div class="d--flex">
              <p class="card__date">July 29, 2020</p>
              <hr class="vertical__line" />
              <p class="topic">Arts</p>
            </div>
            <p class="card__text">
              Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident sunt in culpa.
            </p>
            <a class="card__link text--primary" href="./news  single.php">Read more</a>
          </div>

          <div class="card body--color">
            <div class="card__img"></div>
            <h4 class="card__title text--black">
              Caecat cupidatat non proident sunt in culpa qui officia
            </h4>
            <div class="d--flex">
              <p class="card__date">July 29, 2020</p>
              <hr class="vertical__line" />
              <p class="topic">Arts</p>
            </div>
            <p class="card__text">
              Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident sunt in culpa.
            </p>
            <a class="card__link text--primary" href="./news  single.php">Read more</a>
          </div>
          <div class="card body--color">
            <div class="card__img"></div>
            <h4 class="card__title text--black">
              Quis nostrud exercitation ullamco laboris nisi
            </h4>
            <div class="d--flex">
              <p class="card__date">July 29, 2020</p>
              <hr class="vertical__line" />
              <p class="topic">Arts</p>
            </div>
            <p class="card__text">
              Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
              cupidatat non proident sunt in culpa.
            </p>
            <a class="card__link text--primary" href="./news  single.php">Read more</a>
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
