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
          <h1 class="text--primary">Contact</h1>
          <div class="rectangular"></div>
        </div>
      </header>
    </body>

    <!-- Contacts section -->
    <section class="section__contact body--color">
      <div class="container">
        <iframe
          class="google-map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19869.764102501787!2d-0.13961923026039183!3d51.49999613055585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2slt!4v1657644763269!5m2!1sen!2slt"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
        <div class="grid grid-cols-2">
          <div class="contact-info__col">
            <div class="contact-img bg--accent"></div>
            <div class="contact-info grid grid-cols-2">
              <div class="adress__col">
                <img
                  class="text--primary map-icon"
                  src="./assets/images/map icon.svg"
                  alt=""
                />
                <p class="info__title bold-lato-text">Address</p>
                <p class="adress normal-text">
                  99 S.t Jomblo Park <br />
                  Pekanbaru 28292. <br />
                  Indonesia
                </p>
                <p class="work-hours normal-text">
                  Mon - Fri: 8AM — 4PM <br />
                  Saturday: 8AM — 4PM
                </p>
              </div>
              <div class="phone-email__col">
                <img
                  class="phone-icon"
                  src="./assets/images/phone incon.svg"
                  alt=""
                />
                <p class="info__title bold-lato-text">Phone & Email</p>
                <p class="phone-number normal-text">
                  Phone: +44-333 014 4501 <br />
                  Fax: +44-333 014 4502
                </p>
                <p class="email normal-text">Email: contact@manice.com</p>
              </div>
            </div>
          </div>
          <div class="contact-form__col">
            <h3 class="contact-form__title text--black">Contact Form</h3>
            <form action="registration">
              <input
                class="contact-form__input"
                type="text"
                placeholder="Your Name"
              />
              <input
                class="contact-form__input"
                type="text"
                placeholder="Your Email"
              />
              <input
                class="contact-form__input message__input"
                type="text"
                placeholder="Your Message"
              />
              <a href="#">
                <div class="btn btn--primary align-center">Send</div>
              </a>
              <p class="form-description open-sans-family italic--text">
                We provide a professional service for private and commercial
                customers.
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Company logos -->
    <section class="section__company-logos contact-company-logos">
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
