<?php
include('auth.php');
require '../app/start.php';

if (!empty($_POST)) {
    $title = $_POST['title'];
    $link  = $_POST['link'];
    $body  = $_POST['body'];

    $insertPage = $db->prepare("
    INSERT INTO pages (title,link,body,created)
    VALUES ( :title, :link, :body, NOW())
  ");

    $insertPage->execute([
    'title' => $title,
    'link'  => $link,
    'body'  => $body,
  ]);

    header('Location: ' . BASE_URL . '/admin/index.php');
}

require VIEW_ROOT . '/admin/add.php';
