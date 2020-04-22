<?php

require 'app/start.php';

$pages = $db->query("
  SELECT id, title, label, slug, created, body
  FROM pages
")->fetchAll(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/naujienos.php' ;
