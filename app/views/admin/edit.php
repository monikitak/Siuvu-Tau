<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <h2>Edit page</h2>

  <form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off">
    <label for="title">
      Title
      <input type="text" name="title" id="title" value="<?php echo e($page['title']); ?>">
    </label>
    <label for="link">
      link
      <input type="text" name="link" id="link" value="<?php echo e($page['link']); ?>">
    </label>
    <label for="body">
      Body
      <textarea name="body" id="body" rows="10" cols="30"><?php  echo e($page['body']);?></textarea>
    </label>

    <input type="hidden" name="id" value="<?php echo e($page['id']); ?>">

    <input type="submit" value="Edit">
  </form>
</main>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
