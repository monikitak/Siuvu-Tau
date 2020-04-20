<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "55monika5@gmail.com";
  $headers = "Nuo: ".$mailFrom;
  $txt = "Jūs gavote žinutę nuo ".$name.".\n\n".$message;

  mail($mailTo, $txt, $headers);
  header("Location: index.php?mailsend");
}
