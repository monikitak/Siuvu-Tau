<?php
include('auth.php');
require '../app/start.php';

if (!empty($_POST)) {
    $id    = $_POST['id'];
    $title = $_POST['title'];
  $link  = $_POST['link'];
    $body  = $_POST['body'];

    $updatePage = $db->prepare("
    UPDATE pages
    SET
        title   = :title,
        link    = :link,
        body    = :body,
        updated = NOW()
    WHERE id = :id
  ");

    $updatePage->execute([
  'id'    => $id,
  'title' => $title,
  'link'  => $link,
  'body'  => $body,
  ]);

    header('Location: ' . BASE_URL . '/admin/index.php');
}

if (!isset($_GET['id'])) {
    header('Location: ' . BASE_URL . '/admin/index.php');
    die();
}

$page = $db->prepare("
  SELECT id, title, body, link
  FROM pages
  WHERE id = :id
");

$page->execute(['id' => $_GET['id']]);

$page = $page->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';
