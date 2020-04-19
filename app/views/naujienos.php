<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section>
    <div class="container">
      <h2 class="section-title">Naujienos</h2>
      <?php if (empty ($pages)): ?>
      <p>Sorry, no pages at the moment.</p>
      <?php else: ?>
      <ul>
        <?php foreach ($pages as $page): ?>
        <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page['slug'] ;?>"><?php echo $page ['label']; ?></a></li>
        <?php endforeach; ?>
      </ul>
      <?php endif; ?>
    </div>
    <section>
</main>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
