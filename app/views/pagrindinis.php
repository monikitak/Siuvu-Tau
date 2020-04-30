<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section class="hero">
    <div class="hero__container container">
      <h1 class="hero__title">Siuvimo paslaugos Jums!</h1>
      <p class="hero__text">Sukurkite tai, kas Jums patinka</p>
      <div class="buttons-wrapper">
        <a href="#" class="button button--orange">Susisiekite</a>
        <a href="<?php echo BASE_URL;?>/galerija.php" class="button button--pink">Galerija</a>
      </div>
    </div>
  </section>

  <section class="about section-container">
    <span class="anchor" id="apie-mus"></span>
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
          <a class="gallery__img" href="#">
            <figcaption class="gallery__text">Suknele</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_1.jpg" alt="suknele">
          </a>
        </figure>
        <figure class="gallery__item">
          <a class="gallery__img" href="#">
            <figcaption class="gallery__text">Suknele</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_2.jpg" alt="suknele">
          </a>
        </figure>
        <figure class="gallery__item">
          <a class="gallery__img" href="#">
            <figcaption class="gallery__text">Suknele</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_3.jpg" alt="suknele">
          </a>
        </figure>
        <figure class="gallery__item">
          <a class="gallery__img" href="#">
            <figcaption class="gallery__text">Suknele</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_4.jpg" alt="suknele">
          </a>
        </figure>
      </div>
      <div class="buttons-wrapper">
        <a href="<?php echo BASE_URL;?>/galerija.php" class="button button--orange">Pamatykite daugiau</a>
      </div>
    </div>
  </section>

  <section class="section-container contacts">
    <span class="anchor" id="kontaktai"></span>
    <div class="container">
      <h2 class="section-title section-title--light">Kontaktai</h2>
      <div class="contacts__wrapper">
        <div class="form">
          <h3 class="contacts__title">Susisiekite su mumis:</h3>
          <form class="form__wrapper" action="index.php" method="post">
            <div class="form__field">
              <input type="text" name="name" placeholder="Vardas">
            </div>
            <div class="form__field">
              <input type="email" name="mail" placeholder="El.paštas">
            </div>
            <div class="form__field">
              <textarea name="message" rows="8" cols="80" placeholder="Žinutė"></textarea>
            </div>
            <div class="buttons-wrapper buttons-wrapper--form">
              <input class="button button--orange button--form" type="submit" value="Siųsti">
            </div>
          </form>
        </div>
        <div class="location">
          <h3 class="contacts__title">Kur galite mus rasti?</h3>
          <div class="location__address">
            <img src="<?php echo BASE_URL;?>/img/map_marker.svg" alt="location marker">
            <p class="location__text">Kalvarijų g. 131, Vilnius</p>
          </div>
          <div class="map">
            <iframe class="map__iframe" src="https://maps.google.com/maps?q=kalvariju%20g.%20131&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
