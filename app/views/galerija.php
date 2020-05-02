<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section class="gallery-page">
    <div class="container">
      <h2 class="section-title section-title--gallery">Galerija</h2>
      <div class="buttons-wrapper buttons-wrapper--gallery">
        <button class="button button--outline button--selected" data-class="visi">Visi</button>
        <button class="button button--outline" data-class="sukneles">Suknelės</button>
        <button class="button button--outline" data-class="svarkai">Švarkai</button>
        <button class="button button--outline" data-class="kita">Kita</button>
      </div>
      <div class="gallery">
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_1.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_2.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_3.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="svarkai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Švarkas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/1_item_3_4.jpg" alt="svarkas">
          </div>
        </figure>
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknelė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/2_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="svarkai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Švarkas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/3_item_3_4.jpg" alt="svarkas">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kita">
          <div class="gallery__img">
            <figcaption class="gallery__text">Pagalvė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/4_item_3_4.jpg" alt="kita">
          </div>
        </figure>
        <figure class="gallery__item" data-class="svarkai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Švarkas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/5_item_3_4.jpg" alt="svarkas">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kita">
          <div class="gallery__img">
            <figcaption class="gallery__text">Pagalvė</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/6_item_3_4.jpg" alt="kita">
          </div>
        </figure>
    </div>
  </section>
</main>

<script type="text/javascript" src="<?php echo BASE_URL;?>/js/galleryFilter.js?<?php echo date('h:i:s'); ?>"></script>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
