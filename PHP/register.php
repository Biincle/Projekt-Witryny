<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rejestracja w serwisie Transfery</title>
  </head>
  <body>
    <?php
    // include 'DatabaseConnect.php';
    // polaczZBaza();



      if(isset($_POST['wyslano'])){ //Sprawdzanie czy przycisk "dalej" został kliknięty..
        try
        {
          $db = new PDO('mysql:host=localhost;dbname=transfery;charset=utf8mb4', 'root', '');
          print "Łączenie z bazą danych...";
        }
        catch (PDOException $e)
        {
          print "Błąd połączenia z bazą!: " . $e->getMessage() . "<br/>";
          die();
        }
          $login = trim($_POST['login']);
          $email = trim($_POST['email']);
          $password = trim($_POST['haslo']);
          $password2 = trim($_POST['powtorz_haslo']);
          $errors = NULL;

          //Sprawdzanie przesłanych danych - długość hasła min.6 itd...
          if(strlen($login)<3){
            $errors .= 'Login musi zawierać co najmniej 3 znaki.';
          }
          if(strlen($password) <6){
            $errors .= 'Hasło musi zawierać co najmniej 6 znaków.';
          }
          if($password !== $password2){
            $errors .= 'Hasła nie mogą się różnić!';
          }
          if(!preg_match('/\@/', $email) || strlen($email) < 5){
            $errors .= 'Podany adres email jest nie prawidłowy.';
          }

          //Sprawdzamy czy użytkownik o takim samym loginie już nie istnieje
        $stmt = $db->prepare("SELECT COUNT(id) FROM uzytkownicy WHERE login=:nick");
        $stmt->bindValue(":nick", $login, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch();
        if($row[0]>0) $errors .= 'Konto o takim loginie już istnieje<br>';

        //Sprawdzamy czy użytkownik o takim samym adresie e-mail już nie istnieje
        $stmt2 = $db->prepare("SELECT COUNT(id) FROM uzytkownicy WHERE email=:email");
        $stmt2->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt2->execute();
        $row2 = $stmt2->fetch();
        if($row2[0]>0) $errors .= 'Konto o takim adresie e-mail już istnieje<br>';

        if(empty($errors)){ //Jeśli nie ma błędów, rejestrujemy użytkownika
           $password = sha1($password); //kodujemy hasło
           $dodaj = $db->prepare("INSERT INTO uzytkownicy VALUES(NULL, :nick, :haslo, :email, :uprawnienia)");
           $dodaj->bindValue(":nick", $login, PDO::PARAM_STR);
           $dodaj->bindValue(":haslo", $password, PDO::PARAM_STR);
           $dodaj->bindValue(":email", $email, PDO::PARAM_STR);
           $dodaj->bindValue(":uprawnienia", "normal", PDO::PARAM_STR);
           $dodaj->execute();
           $error = $dodaj->errorInfo();
if($error[0])
{
    var_dump($error);
    die();
}
           //header("Location: Logowanie2.php");
           echo "Zarejestrowałeś się. Możesz się teraz <a href=\"login.php\">zalogować</a>";
       }
       else{
           echo '<div style="color:red">'.$errors.'</div>';

       }




     }else{
       echo "Nie został zatwierdzony;";
     }
    ?>
  </body>
</html>
