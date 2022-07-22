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
          <h1 class="text--primary">News</h1>
          <div class="rectangular"></div>
        </div>
      </header>
    </body>

    <!-- News single -->
    <section class="section__news-single open-sans-family body--color">
      <div class="news__container">
        <header class="news-single__header">
          <h2 class="news-single__title">
            Culpaqui officia deserunt mollit anim.
          </h2>
          <div class="all-tags__container">
            <div class="grid grid-cols-3">
              <div class="tag__container d--flex">
                <svg class="tag-icon">
                  <use
                    xlink:href="assets\images\news tags svg.svg#person"
                  ></use>
                </svg>
                <p class="tag-name">Admin</p>
              </div>
              <div class="tag__container d--flex">
                <svg class="tag-icon">
                  <use
                    xlink:href="assets\images\news tags svg.svg#calendar"
                  ></use>
                </svg>
                <p class="tag-name">July 10, 2020</p>
              </div>
              <div class="tag__container d--flex">
                <svg class="tag-icon">
                  <use
                    xlink:href="assets\images\news tags svg.svg#comment"
                  ></use>
                </svg>
                <p class="tag-name">No Comments</p>
              </div>
            </div>
          </div>
        </header>

        <div class="news-single__img bg--accent"></div>
        <div class="news-text__container">
          <p class="news-single__text first-paragraph">
            Rutenim ad minim veniam quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Donec pede justo, fringilla
            vel, aliquet nec, vulputate eget, arcu. utenim ad minim veniam quis
            nostrud exercitation ullamco laboris nisi ut aliquip.
          </p>

          <p class="news-single__text">
            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
            Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras
            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
            tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
            ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
            tellus.
          </p>

          <p class="news-single__text">
            Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.
            Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur
            ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas
            tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit
            amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel,
            luctus pulvinar, hendrerit id, lorem.
          </p>

          <p class="news-single__text">
            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
            libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
            eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit
            amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
            bibendum sodales, augue velit cursus nunc, quis gravida magna mi a
            libero. Fusce vulputate eleifend sapien.
          </p>

          <p class="ol__title bold-lato-text">Ordered List</p>
          <ol>
            <li>Qui officia deserunt mollit anim id est laborum.</li>
            <li>Proident sunt in culpa qui officia.</li>
            <li>Officia deserunt mollit anim.</li>
          </ol>

          <p class="ul__title bold-lato-text">Unordered List</p>
          <ul class="unordered-list">
            <li>Qui officia deserunt mollit anim id est laborum.</li>
            <li>Proident sunt in culpa qui officia.</li>
            <li>Officia deserunt mollit anim.</li>
          </ul>
          <p class="news-single__text">
            Tellus eget condimentum rhoncus, sem quam semper libero, sit amet
            adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus
            pulvinar, hendrerit id, lorem.
          </p>

          <p class="news-single__text">
            Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
            libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci
            eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit
            amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget
            bibendum sodales, augue velit cursus nunc, quis gravida magna mi a
            libero. Fusce vulputate eleifend sapien.
          </p>
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
