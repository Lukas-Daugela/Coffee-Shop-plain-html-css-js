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
    <title>Pricing Table</title>
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
          <h1 class="text--primary">Pricing Table</h1>
          <div class="rectangular"></div>
        </div>
      </header>
    </body>

    <!-- First Pricing table -->
    <section class="section__first-offer">
      <div class="container">
        <div class="grid grid-cols-3 col-gap-30">
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

    <!-- Second Pricing table -->
    <section class="section__second-offer">
      <div class="d--flex justify-center">
        <h3 class="section--title">3 Column</h3>
      </div>
      <div class="container">
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

    <!-- Third Pricing table -->
    <section class="section__third-offer">
      <div class="d--flex justify-center">
        <h3 class="section--title">4 Column</h3>
      </div>
      <div class="container">
        <div class="grid grid-cols-4">
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

          <!-- third card -->
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

          <!-- fourth card -->
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
        </div>
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
