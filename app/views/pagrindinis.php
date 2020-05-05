<?php require VIEW_ROOT . '/templates/mainHeader.php'; ?>
<main>
  <section class="hero">
    <div class="hero__container container">
      <h1 class="hero__title">Siuvimo paslaugos Jums!</h1>
      <p class="hero__text">Sukurkite tai, kas Jums patinka</p>
      <div class="buttons-wrapper">
        <a href="#kontaktai" class="button button--orange">Susisiekite</a>
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
          <h3 class="about__name">Patikimi profesionalai</h3>
          <p class="about__text">Musų komandoje dirba savo srities profesionalai. Esame sukaupę didesnę nei 15 metų darbo patirtį.
          Mes siuvame drabužius garsių mados dizainerių kolekcijoms, serialų ir filmų aktoriams, vestuvių nuotakoms bei jaunikiams ir žinoma - kiekvienam norinčiam pasipuošti.</p>
        </div>
        <div class="about__item">
          <img class="about__img" src="<?php echo BASE_URL;?>/img/service_2.png" alt="manekenas">
          <h3 class="about__name">Puikus aptarnavimas</h3>
          <p class="about__text">Mūsų komanda mielai pakonsultuos kiekvieną klientą. Patarsime dėl kirpimo, spalvų ar medžiagos pasirinkimo. Padėsime Jums sukurti tai, ko norite! </p>
        </div>
        <div class="about__item">
          <img class="about__img" src="<?php echo BASE_URL;?>/img/service_3.png" alt="svarkas">
          <h3 class="about__name">Kaina atitinka kokybę</h3>
          <p class="about__text">Kai siuvame drabužį -  mes įdedame visas pastangas ir širdį. Naudojame tik kokybiškas medžiagas ir siūlus, todėl užtikriname aukštą siuvinių kokybę.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="citation">
    <div class="container citation__wrapper">
      <p class="citation__text">“Išlaisvink žmogų, ir jis pradės kurti.” - Antuanas de Sent Egziuperi</p>
      <img class="citation__img" src="<?php echo BASE_URL;?>/img/yarn.png" alt="paveikslelis">
    </div>
  </section>

  <section class="section-container">
    <div class="container">
      <h2 class="section-title">Galerija</h2>
      <div class="gallery">
        <figure class="gallery__item">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_1.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item">
          <div class="gallery__img">
            <figcaption class="gallery__text">Paltas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/1_coat.jpg" alt="paltas">
          </div>
        </figure>
        <figure class="gallery__item">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_3.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/2_item_3_4.jpg" alt="suknele">
          </div>
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
          <form class="form__wrapper" action="#kontaktai" method="post">
            <div class="form__field">
              <input type="text" name="name" placeholder="Vardas">
            </div>
            <div class="form__field">
              <input type="email" name="mail" placeholder="El.paštas" required>
              <input type="text" id="second-name" name="second-name" />
            </div>
            <div class="form__field">
              <textarea name="message" rows="8" cols="80" maxlength="2000" placeholder="Žinutė" required></textarea>
            </div>
            <div class="buttons-wrapper buttons-wrapper--form">
              <input class="button button--orange button--form" name="submit" type="submit" value="Siųsti">
            </div>
            <?php if (isset($success)){ echo "<div>" . $success . "</div>";}?>
          </form>
        </div>
        <div class="location">
            <h3 class="contacts__title">Mus galite rasti Vilniuje:</h3>
            <div class="location__address">
              <img src="<?php echo BASE_URL;?>/img/map_marker.svg" alt="location marker">
              <p class="location__text">P. Lukšio g. 16-417, Vilnius</p>
            </div>
            <div class="map">
              <iframe class="map__iframe" src="https://maps.google.com/maps?q=P.%20Luk%C5%A1io%20g.%2016-417%2C%20Vilnius&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
      </div>
    </div>
  </section>
</main>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
