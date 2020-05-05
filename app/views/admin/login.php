<?php require VIEW_ROOT . '/templates/header.php'; ?>
<main>
  <section>
    <div class="container">
      <h2 class="section-title">Prisijungimas</h2>
      <form method="POST" action="">
        <div class="form__field form__field--admin">
          <input type="text" name="username" placeholder="Prisijungimo vardas">
        </div>
        <div class="form__field form__field--admin">
          <input type="password" name="password" placeholder="Slaptažodis" />
        </div>
        <?php
              if(isset($message)){
                echo '<div>'.$message.'</div>';
              }
             ?>
        <div class="buttons-wrapper buttons-wrapper--admin-form">
          <input class="button button--orange button--form" type="submit"  name="but_submit" value="Prisijungti">
        </div>
      </form>
    </div>
  </section>
</main>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>
