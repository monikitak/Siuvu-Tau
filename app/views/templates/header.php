<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,  maximum-scale=1">
  <title>Ruta siuna</title>
  <link rel="stylesheet" href="<?php echo BASE_URL;?>/css/style.min.css?<?php echo date('h:i:s'); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <header>
    <nav class="menu container">
      <span class="menu__toggle" id="js-menu-toggle">
        <img class="menu__icon" src="<?php echo BASE_URL;?>/img/menu-icon.svg?">
      </span>
      <a class="logo" href="<?php echo BASE_URL;?>">Ruta siuna</a>
      <ul class="menu__list" id="js-menu-list">
        <li class="menu__item">
          <a href="<?php echo BASE_URL;?>" class="menu__link menu__link--active">Pradžia</a>
        </li>
        <li class="menu__item">
          <a href="#" class="menu__link">Galerija</a>
        </li>
        <li class="menu__item">
          <a href="<?php echo BASE_URL;?>#apie-mus" class="menu__link">Apie mus</a>
        </li>
        <li class="menu__item">
          <a href="naujienos.php" class="menu__link">Naujienos</a>
        </li>
        <li class="menu__item">
          <a href="<?php echo BASE_URL;?>#kontaktai" class="menu__link">Kontaktai</a>
        </li>
      </ul>
    </nav>
  </header>
