<?php
  include("header.php");

?>

<h4>System administrowania stroną v.1.0.0</h4>



  <div class="row">
    <div class="col-md-4">
      <h2>Ilość użytkowników: </h2>
        <?php
        $zapytanie = $DB_con->query("SELECT * FROM uzytkownicy");
        $zapytanie->execute();
        $count = $zapytanie->rowCount();
        echo '<h2 style="font-weight:bold">'.$count.'</h2>';
        ?>
        <a href="?user">Zarządzaj użytkownikami</a>
    </div>
    <div class="col-md-4">
      <h2>Ilość piłkarzy w bazie: </h2>
      <?php
        $zapytanie = $DB_con->query("SELECT * FROM pilkarz");
        $zapytanie->execute();
        $count = $zapytanie->rowCount();
        echo '<h2 style="font-weight:bold">'.$count.'</h2>';
      ?>
    </div>
    <div class="col-md-4">
      <h2>Aktywnych transferów: </h2>
      <?php
      $zapytanie = $DB_con->query("SELECT * FROM transfer");
      $zapytanie->execute();
      $count = $zapytanie->rowCount();
      echo '<h2 style="font-weight:bold">'.$count.'</h2>';
      ?>
    </div>
  </div>

  <div class="row">
    <?php
      if(isset($_REQUEST['user'])){
      $test =  $_REQUEST['user'];

      $zapytanie = $DB_con->query("SELECT * FROM uzytkownicy");
      $zapytanie->execute();

      foreach ($zapytanie as $wiersz) {
        echo $wiersz['nick'];
      }
    }




    ?>
  </div>
<?php

  include("footer.php");
?>
