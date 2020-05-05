<?php


session_start();

require '../app/start.php';
if(isset($_SESSION["username"]) && $_SESSION["username"] === true){
    header("location: index.php");
    exit;
}

if(isset($_POST['but_submit'])){

    if (empty($_POST['username']) || empty($_POST['password'])){

      $message = 'Užpildykite visus laukus.';

    } else{
      $query = "SELECT * FROM users WHERE username =:username AND password = :password";
      $statement = $db->prepare($query);
      $statement->execute(
        array(
          'username' => $_POST["username"],
          'password' => $_POST["password"],
        )
      );
      $count  = $statement->rowCount();
      if($count > 0){
        // $SESSION["username"] = $_POST["username"];
         session_start();
         $_SESSION["username"] = true;
          header('Location: index.php');
      }else{
        $message = 'Neteisingas prisijungimo vardas arba slaptažodis.';
      }
    }

}

require VIEW_ROOT . '/admin/login.php';
