<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section>
    <div class="container">
      <h2 class="section-title">Naujienos</h2>

      <?php if (!$page): ?>
      <p>Atsiprašome, nėra tokio įrašo.</p>

      <?php  else: ?>
      <div class="news">
        <div class="news__item">
          <h3 class="news__title"><?php echo e($page['title']); ?></h3>
          <p class="news__date"><?php echo $page['created']->format('j-m-Y'); ?></p>
          <p class="news__text"><?php echo e($page['body']); ?></p>
        </div>
      </div>

      <?php endif; ?>

      <p class="news__back"><a href="<?php echo BASE_URL;?>/naujienos.php">
          < Grįžti į naujienų sąrašą</a> </p> </div> </section> </main> <?php require VIEW_ROOT . '/templates/footer.php'; ?> <!-- <div>
            <p class="faded">
              Created on <?php echo $page['created']->format('jS M Y'); ?>
              <?php if ($page['updated']): ?>
              Last updated <?php echo $page['updated']->format('jS M Y h:i a'); ?>
              <?php endif; ?>
            </p>
    </div> -->
