<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section>
    <div class="container">
      <h2 class="section-title">Redaguoti įrašą</h2>

      <form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off">
        <label class="form__field form__field--admin" for="title">
          Pavadinimas
          <input type="text" name="title" id="title" value="<?php echo e($page['title']); ?>">
        </label>
        <label class="form__field form__field--admin" for="link">
          *Nuoroda
          <input type="text" name="link" id="link" value="<?php echo e($page['link']); ?>" required>
        </label>
        <label class="form__field form__field--admin" for="body">
          Aprašymas
          <textarea name="body" id="body" rows="10" cols="30"><?php  echo e($page['body']);?></textarea>
        </label>

        <input type="hidden" name="id" value="<?php echo e($page['id']); ?>">

        <div class="buttons-wrapper buttons-wrapper--admin-form">
          <input class="button button--orange button--form" type="submit" value="Redaguoti">
        </div>
      </form>

      <p class="news__back news__back--admin">
        <a href="<?php echo BASE_URL;?>/admin/index.php"> &#x276E; Grįžti į sąrašą</a>
      </p>
    </div>
  </section>
</main>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
