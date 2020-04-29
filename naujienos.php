<?php

require 'app/start.php';

$pages = $db->query("
  SELECT id, title, link, created, body
  FROM pages
  ORDER BY created DESC
")->fetchAll(PDO::FETCH_ASSOC);


require VIEW_ROOT . '/naujienos.php' ;
