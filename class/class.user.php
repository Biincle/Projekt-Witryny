<?php
 class user{
   private $db;

   function __construct($DB_con)
   {
     $this->db = $DB_con;
   }


   public function register($login, $email, $password1){
     try {
     $nowe_haslo = password_hash($password1, PASSWORD_DEFAULT); // Hashujemy hasło...

      $stm = $this->db->prepare("INSERT INTO uzytkownicy VALUES(NULL, :nick, :haslo, :email, :uprawnienia)");
      $stm->bindValue(":nick", $login);
      $stm->bindValue(":haslo", $nowe_haslo);
      $stm->bindValue(":email", $email);
      $stm->bindValue(":uprawnienia", "normal");

      $stm->execute();

      return $stm;
    }
      catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }


   public function login($login,$password)
    {
       try
       {
          $stmt = $this->db->prepare("SELECT * FROM uzytkownicy WHERE nick=:nick LIMIT 1");
          $stmt->execute(array(':nick'=>$login));

          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() > 0)
          {
             if(password_verify($password, $userRow['haslo']))
             {
                $_SESSION['user_session'] = $userRow['id'];
                return true;
             }
             else
             {
                return false;
             }
          }
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }
   }

   public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }


   public function redirect($url)
    {
        header("Location: $url");
    }


    public function logout()
   {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
   }

 }


?>
