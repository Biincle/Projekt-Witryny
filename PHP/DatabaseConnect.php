<?php
  //Łączenie z bazą danych
class db {
  function polaczZBaza(){
  try
{
    $db = new PDO('mysql:host=localhost;dbname=transfery;charset=utf8mb4', 'root', '');
}
catch (PDOException $e)
{
    print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
    die();
}
}
}
?>
