<?php
include("header.php");

if(isset($_REQUEST['id'])){
  $id_transferu = $_REQUEST['id'];
  $id_pilkarz = $transfer->getId($id_transferu, 'pilkarz');
  $id_klub = $transfer->getId($id_transferu, 'stary_klub');
}else if(empty($_REQUEST['id'])) {
  $user->redirect("index.php");
}


?>

            <div class="card">
              <div class="card-body">
                <div class="row">
                 <div class="col-md-6">
                    <img src="<?php echo $transfer->getName($id_pilkarz, 'profilowe');?>" alt="<?php echo $transfer->getName($id_pilkarz, 'nazwisko');?>" class="img-responsive rounded" alt="png" width="64" height="64">
                    <span><?php echo $transfer->getName($id_pilkarz, 'imie').' '.$transfer->getName($id_pilkarz, 'nazwisko');?></span>
                    <ul class="list-group">
                      <li class="list-group-item">Narodowość: <?php echo $transfer->getName($id_pilkarz, 'narodowosc');?></li>
                      <li class="list-group-item">Data urodzenia:<?php echo $transfer->getName($id_pilkarz, 'data_urodzenia');?> </li>
                      <li class="list-group-item">Wiek: <?php echo $transfer->getName($id_pilkarz, 'wiek');?></li>

                  </ul>
                 </div>
                <div class="col-md-6">
                  <img src="<?php echo $transfer->clubManager($id_klub, 'logo');?>" alt="<?php echo $transfer->clubManager($id_klub, 'nazwa');?>" class="img-responsive rounded" alt="png" width="64" height="64">
                  <span><?php echo $transfer->clubManager($id_klub, 'nazwa');?></span>
                  <ul class="list-group">
                    <li class="list-group-item">Data założenia:<?php echo $transfer->clubManager($id_klub, 'data_zalozenia');?> </li>

                </ul>
                </div>
              </div>

                <div class="row">
                    <p>informacje o nowym klubie, kwota, i informacja skąd pochodzi</p>
                </div>

              </div>
              <div class="card-footer text-muted text-center">
              Informacja pochodzi ze strony: <b>tutaj_strona_.domena</b>
              </div>
            </div>
<?php include("footer.php");?>
