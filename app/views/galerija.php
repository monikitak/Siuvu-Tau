<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section class="gallery-page">
    <div class="container">
      <h2 class="section-title section-title--gallery">Galerija</h2>
      <div class="buttons-wrapper buttons-wrapper--gallery">
        <button class="button button--outline button--selected" data-class="visi">Visi</button>
        <button class="button button--outline" data-class="sukneles">Suknelės</button>
        <button class="button button--outline" data-class="kelnes">Kelnės</button>
        <button class="button button--outline" data-class="kostiumai">Kostiumai</button>
        <button class="button button--outline" data-class="kita">Kita</button>
      </div>
      <div class="gallery">
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknele</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_1.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="sukneles">
          <div class="gallery__img">
            <figcaption class="gallery__text">Suknele</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_2.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kelnes">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kelnės</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_3.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/dress_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/1_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/2_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/3_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/4_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/5_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
        <figure class="gallery__item" data-class="kostiumai">
          <div class="gallery__img">
            <figcaption class="gallery__text">Kostiumas</figcaption>
            <img class="gallery__thumb" src="<?php echo BASE_URL;?>/img/6_item_3_4.jpg" alt="suknele">
          </div>
        </figure>
    </div>
  </section>
</main>

<script type="text/javascript" src="<?php echo BASE_URL;?>/js/galleryFilter.js?<?php echo date('h:i:s'); ?>"></script>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
