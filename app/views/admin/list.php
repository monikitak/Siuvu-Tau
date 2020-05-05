<?php require VIEW_ROOT . '/templates/header.php'; ?>

<main>
  <section>
    <div class="container">
      <h2 class="section-title section-title--admin">Admin puslapis</h2>

      <div class="buttons-wrapper buttons-wrapper--admin">
        <a href="<?php echo BASE_URL;?>/admin/add.php" class="button button--orange">Sukurti įrašą</a>
        <a href="logout.php" class="button button--outline button--outline-grey">Atsijungti</a>
      </div>

      <?php if(empty($pages)): ?>
      <p>Šiuo metu nėra įrašų.</p>

      <?php else: ?>
      <div class="admin-list">
        <?php foreach ($pages as $page): ?>
        <div class="admin-list__item">
          <p class="admin-list__date"><?php echo $page['created']; ?></p>
          <a class="admin-list__title" href="<?php echo BASE_URL; ?>/page.php?page=<?php echo e($page['link']);?>"><?php echo e($page['title']); ?></a>
          <p class="admin-list__text"><?php limitWords($page ['body'], 100); ?></p>
          <div class="buttons-wrapper buttons-wrapper--admin-item">
            <a class="button button--outline button--admin" href="<?php echo BASE_URL; ?>/admin/edit.php?id=<?php echo e($page['id']);?>">Redaguoti</a>
            <a class="button button--outline button--outline-grey button--admin" href="<?php echo BASE_URL; ?>/admin/delete.php?id=<?php echo e($page['id']); ?>">Ištrinti</a>
          </div>
        </div>
        <?php endforeach; ?>

      </div>

      <?php endif; ?>

    </div>
  </section>
</main>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
