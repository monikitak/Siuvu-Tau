<?php
if(!empty($_POST['second-name'])) die();

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "55monika5@gmail.com";
  $from = "Nuo: ".$mail;
  $subject = 'Žinutė iš siuvutau.lt';
  $body = "Jūs gavote žinutę nuo ".$name.".\n\n".$from."\n\n".$message;

  if(mail($mailTo, $subject, $body)){
    $success = "Žinutė sėkmingai išsiųsta.";
  }else{
    $success = "Klaida. Mėginkite iš naujo.";
  }

  // mail($mailTo, $subject, $body);
  // header("Location: index.php?mailsend");
}
