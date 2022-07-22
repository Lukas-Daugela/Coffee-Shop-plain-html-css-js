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

    <!-- News cards -->
    <section class="section__news-cards">
      <div class="container">
        <div class="grid grid-cols-3 col-gap-30 row-gap-103">
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

    <!-- Pagination -->
    <section class="section__pagination">
      <div class="container">
        <ul class="list d--flex">
          <li class="pagination--btn">Previous</li>
          <li class="pagination--btn active">1</li>
          <li class="pagination--btn">2</li>
          <li class="pagination--btn">3</li>
          <li class="pagination--btn">Next</li>
        </ul>
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
