<?php

include_once 'class/DatabaseConnect.php';
include_once 'class/class.transfer.php';

if(isset($_COOKIE['aktywacja'])){
   
}else{
   $user->redirect('soon.php');
 }
if(!$user->is_loggedin()){
  $info[] = "Zachęcamy do tworzenia kont :)";
}else {

$user_id = $_SESSION['user_session'];
$stmt = $DB_con->prepare("SELECT * FROM uzytkownicy WHERE id=:user_id");
$stmt->execute(array(":user_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
$nick = $userRow['nick'];
$uprawnienia = $userRow['uprawnienia'];
    }


?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Główna</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link href="open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
</head>
<body class="d-flex flex-column">
  <!-- CONTENT -->

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <a class="navbar-brand" href="#">Ino Logo</a> -->
      <a class="navbar-left" href="index.php" style="margin-left:10px;"><img src="img/test.png" alt="" width="45" height="45"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" style="margin-left:auto;margin-right:auto;">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Transfery <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Newsy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Transfery LIVE</a>
        </li>
      </ul>
      <!-- <a class="btn btn-outline-success" href="Logowanie2.html">Zaloguj</a> -->
      <?php
          if(isset($nick)){

            ?>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php print $nick?></button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ustawienia</a>
                <a class="dropdown-item" href="addSection.php">Dodaj</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php?logout=true">Wyloguj</a>
              </div>
            </div>
            <?php
          }else if(!isset($nick)) {
            ?>
              <a class="btn btn-outline-success" href="Logowanie2.php">Zaloguj</a>
              <?php
          }
      ?>

    </div>
  </nav>
<!-- NAV -->


<!-- CONTENT -->
<div class="container flex-grow">

      <div class="col-md-12" style="margin-top:10px;">
