<?php
session_start();
require 'app/start.php';

if (empty($_GET['page'])) {
    $page = false;
} else {
    $link = $_GET['page'];

    $page = $db->prepare("
      SELECT *
      FROM pages
      WHERE link = :link
      LIMIT 1
  ");

    $page->execute(['link'=> $link]);

    $page = $page->fetch(PDO::FETCH_ASSOC);

    if ($page) {
        $page['created'] = new DateTime($page['created']);

        if ($page['updated']) {
            $page['updated'] = new DateTime($page['updated']);
        }
    }
}

require VIEW_ROOT . '/page/show.php';
