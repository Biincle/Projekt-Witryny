<?php
  include("header.php");
  $id_transferu = $_REQUEST['id'];
  $transfer->usunTransfer($id_transferu);
  $user->redirect("index.php");


?>
