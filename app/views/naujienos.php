<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section>
    <div class="container">
      <h2 class="section-title">Naujienos</h2>

      <?php if (empty ($pages)): ?>
      <p>Šiuo metu nėra naujų įrašų.</p>

      <?php else: ?>
      <div class="news">


        <?php foreach ($pages as $page): ?>
        <div class="news__item">
          <h3 class="news__title"><?php echo e($page ['title']); ?></h3>
          <p class="news__date"><?php echo $page['created']; ?></p>
          <p class="news__text"><?php limitWords($page ['body'], 400); ?></p>
          <a class="news__link" href="<?php echo BASE_URL; ?>/page.php?page=<?php echo e($page['link']) ;?>">Skaitykite daugiau..</a>
        </div>
        <?php endforeach; ?>

      </div>

      <?php endif; ?>

    </div>
  </section>
</main>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>



<!-- <div class="container">
  <h2 class="section-title">Naujienos</h2>

  <?php if (empty ($pages)): ?>
  <p>Šiuo metu nėra naujų įrašų.</p>

    <?php else: ?>
  <ul>
    <?php foreach ($pages as $page): ?>
    <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['link'] ;?>"><?php echo $page ['label']; ?></a></li>
    <?php endforeach; ?>
  </ul>

<?php endif; ?>

</div> -->
