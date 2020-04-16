<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section class="hero">
    <div class="hero__container container">
      <h1 class="hero__title">Siuvimo paslaugos Jums!</h1>
      <p class="hero__text">Sukurkite tai, kas Jums patinka</p>
      <div class="buttons-wrapper">
        <a href="#" class="button button--orange">Susisiekite</a>
        <a href="#" class="button button--pink">Galerija</a>
      </div>
    </div>
  </section>

  <section class="about section-container">
    <div class="container">
      <h2 class="section-title">Apie mus</h2>
      <div class="about__wrapper">
        <div class="about__item">
          <img class="about__img" src="<?php echo BASE_URL;?>/img/service_1.png" alt="siuvimo masina">
          <h3 class="about__name">Paslauga 1</h3>
          <p class="about__text">Aprasymas apie paslauga numeris vienas.
            Aprasymas apie paslauga numeris vienas apie paslauga numeris vienas.
            Aprasymas apie paslauga numeris vienas.
            Aprasymas apie paslauga numeris vienas.
            Aprasymas apie paslauga numeris vienas.</p>
        </div>
        <div class="about__item">
          <img class="about__img" src="<?php echo BASE_URL;?>/img/service_2.png" alt="manekenas">
          <h3 class="about__name">Paslauga 2</h3>
          <p class="about__text">Aprasymas apie paslauga numeris du.</p>
        </div>
        <div class="about__item">
          <img class="about__img" src="<?php echo BASE_URL;?>/img/service_3.png" alt="svarkas">
          <h3 class="about__name">Paslauga 3</h3>
          <p class="about__text">Aprasymas apie paslauga numeris trys.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="citation">
    <div class="container citation__wrapper">
      <p class="citation__text">“Labai protinga citata” - kazkas pasake</p>
      <img class="citation__img" src="<?php echo BASE_URL;?>/img/yarn.png" alt="paveikslelis">
    </div>
  </section>

  <section class="section-container">
    <div class="container">
      <h2 class="section-title">Galerija</h2>
      <div class="gallery">
        <figure class="gallery__item">
          <img src="#" alt="suknele">
          <figcaption class="gallery__text">Suknele</figcaption>
        </figure>
        <figure class="gallery__item">
          <img src="#" alt="suknele">
          <figcaption class="gallery__text">Suknele</figcaption>
        </figure>
        <figure class="gallery__item">
          <img src="#" alt="suknele">
          <figcaption class="gallery__text">Suknele</figcaption>
        </figure>
      </div>
      <div class="buttons-wrapper">
        <a href="#" class="button button--orange">Pamatykite daugiau</a>
      </div>
    </div>
  </section>

  <section class="section-container">
    <div class="container">
      <h2 class="section-title">Kontaktai</h2>
      <div class="contacts">
        <div class="form">
          <h3 class="form__title">Susisiekite su mumis:</h3>
          <form class="form__wrapper" action="#" method="post">
            <div class="form__fields">
              <div class="form__field">
                <input type="text" name="name" placeholder="Vardas">
              </div>
            </div>
            <div class="form__fields">
              <div class="form__field">
                <input type="text" name="mail" placeholder="El.paštas">
              </div>
            </div>
            <div class="form__fields">
              <div class="form__field">
                <input type="text" name="message" placeholder="Žinutė">
              </div>
            </div>
            <div class="buttons-wrapper">
              <input class="button button--orange" type="submit" value="Siųsti">
            </div>
          </form>
        </div>
        <div class="location">
          <h3 class="location__title">Kur galite mus rasti?</h3>
          <div class="location_address">
            <img src="#" alt="location marker">
            <p>siuvyklos adresas</p>
          </div>
          <div class="map">
            <iframe width="400" height="300" src="https://maps.google.com/maps?q=kalvariju%20g.%20131&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
