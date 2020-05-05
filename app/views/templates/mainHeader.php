<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Siuvimo paslaugos Jums">
  <meta name="keywords" content="siuvimas, siuvimo paslaugos">
  <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1">
  <title>Siuvu Tau</title>
  <link rel="stylesheet" href="<?php echo BASE_URL;?>/css/style.min.css?<?php echo date('h:i:s'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">


</head>

<body>
  <header>
    <nav class="menu container">
      <span class="menu__toggle" id="js-menu-toggle">
        <img class="menu__icon" src="<?php echo BASE_URL;?>/img/menu-icon.svg?">
      </span>
      <a class="logo" href="<?php echo BASE_URL;?>">Siuvu Tau</a>
      <ul class="menu__list" id="js-menu-list">
        <li class="menu__item">
          <a href="<?php echo BASE_URL;?>" class="menu__link menu__link--active">Pradžia</a>
        </li>
        <li class="menu__item">
          <a href="<?php echo BASE_URL;?>/galerija.php" class="menu__link">Galerija</a>
        </li>
        <li class="menu__item">
          <a href="#apie-mus" class="menu__link">Apie mus</a>
        </li>
        <li class="menu__item">
          <a href="<?php echo BASE_URL;?>/naujienos.php" class="menu__link">Naujienos</a>
        </li>
        <li class="menu__item">
          <a href="#kontaktai" class="menu__link">Kontaktai</a>
        </li>
        <?php if(isset($_SESSION['username'])): ?>
        <li class="menu__item menu__item--admin">
          <a href="<?php echo BASE_URL;?>/admin/index.php" class="menu__link menu__link--admin"><img class="menu__img menu__img--admin" src="<?php echo BASE_URL;?>/img/admin.png" alt="admin"></a>
        </li>
        <li class="menu__item menu__item--admin">
          <a href="<?php echo BASE_URL;?>/admin/logout.php" class="menu__link menu__link--admin menu__link--admin-logout"><img class="menu__img menu__img--logout" src="<?php echo BASE_URL;?>/img/logout.png" alt="atsijungti"></a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
