<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <h2>Add page</h2>

  <form action="<?php echo BASE_URL; ?>/admin/add.php" method="POST" autocomplete="off">
    <label for="title">
      Title
      <input type="text" name="title" id="title">
    </label>
    <label for="link">
      link
      <input type="text" name="link" id="link">
    </label>
    <label for="body">
      Body
      <textarea name="body" id="body" rows="10" cols="30"></textarea>
    </label>

    <input type="submit" value="Add">
  </form>

</main>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>
