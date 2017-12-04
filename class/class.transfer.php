<?php

class transfer {
  private $db;

  function __construct($DB_con)
  {
    $this->db = $DB_con;
  }

    public $imie = "";
    public $nazwisko = "";
    public $stary_klub_img = "";
    public $nowy_klub_img = "";
    public $kwota = 0;
    public $typ_tansferu = "";



    public function getName($id, $type){
        try
        {
           $stmt = $this->db->prepare("SELECT * FROM pilkarz WHERE id=:id");
           $stmt->execute(array(':id'=>$id));

           $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

           if($type == 'imie'){
           return $userRow['imie'];
         }else if($type == 'nazwisko'){
           return $userRow['nazwisko'];
         }else if($type == 'profilowe'){
           $profilowe = $userRow['zdjecie'];
           if($profilowe == 'Brak'){
             return "https://i.imgur.com/2NcD6gE.png";
           }else {
             return $profilowe;
           }
         }else if($type == 'narodowosc'){
           return $userRow['narodowosc'];
         }else if($type == 'data_urodzenia'){
           return $userRow['data_urodzenia'];
         }else if($type == 'wiek'){
           return $userRow['wiek'];
         }

      } catch (Exception $e) {
        echo $e->getMessage();
      }
    }

    public function clubManager($id, $type){
      if($id == null && $type == 'logo'){
        return 'img/brak_klubu.png';
      }else if($id == null && $type == 'nazwa') {
        return '';
      } else if($id == null && $type == 'data_zalozenia'){
        return '-';
      }else {
      try {
        $q = $this->db->prepare("SELECT * FROM klub WHERE id=:id");
        $q->execute(array(':id' => $id));
        $clubRow = $q->fetch(PDO::FETCH_ASSOC);

        if($type == 'logo'){
          if($clubRow['logo'] == 'Brak'){
            return "https://i.imgur.com/2NcD6gE.png";
          }else {
        return $clubRow['logo'];
      }
      }else if($type == 'nazwa'){

          return $clubRow['nazwa'];

      }else if($type == 'data_zalozenia'){
        return $clubRow['data_zalozenia'];
      }
      } catch (Exception $e) {
          echo $e->getMessage();
      }
    }
    }

    public function getId($id, $type){
        try {
          $q = $this->db->prepare("SELECT * FROM transfer WHERE id=:id");
          $q->execute(array(':id' => $id));
          $idRow = $q->fetch(PDO::FETCH_ASSOC);

          if($type == 'pilkarz'){
          return $idRow['id_pilkarz'];
        }else if($type == 'stary_klub'){
          return $idRow['id_klub'];
        }else if($type == 'nowy_klub'){
          return $idRow['id_nowy_klub'];
        }else if($type == 'kwota'){
          return $idRow['kwota'];
        }
        } catch (Exception $e) {
          echo $e->getMessage();
        }

    }


    public function usunTransfer($id){
      try {

          $q = $this->db->prepare("DELETE FROM transfer WHERE id=:id");
          $q->execute(array(':id' => $id));
      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }

    //private id_transferu = $id;



   //  imie - > transfery.pilkarz
  //  Nazwisko - > transfery.pilkarz
  //  pilkarz_logo - > transfery.pilkarz
  // aktualny_klub_logo - > transfery.klub
  // nowy_klub_logo - > transfery.klub
  // kwota - > transfery.transfer




}





?>
