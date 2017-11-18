  </div>
</div>
<!-- footer -->
<footer class="footer">
  <div class="container" style="padding-top:36px;">
    <div class="row">
      <div class="col-md-3">
        <h5 class="text-gray">O Nas</h5>
        <ul class="list-unstyled mb-0 row">
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-network" target="_blank" href="#">Transfery.co Network</a>
                 </li>
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-company" target="_blank" href="#">Firma</a>
                 </li>
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-careers" target="_blank" href="#">Kariera</a>
                 </li>
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-contact" target="_blank" href="#">Kontakt</a>
                 </li>
             </ul>
      </div>
      <div class="col-md-3">
        <h5 class="text-gray">Legal</h5>
        <ul class="list-unstyled mb-0 row">
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-imprint" target="_blank" href="#">Imprint</a>
                 </li>
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-privacy" target="_blank" href="#">Polityka Prywatności</a>
                 </li>
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-tos" target="_blank" href="#">Regulamin</a>
                 </li>
                 <li class="col-12 mb-lg">
                     <a class="text-black" id="footer-link-licenses" href="#">Licencje</a>
                 </li>
             </ul>
      </div>
      <div class="col-md-6">
        <div style="float:right;">
        <h5 class="text-gray">Aplikacja</h5>
        <ul class="list-unstyled d-flex flex-row flex-wrap mb-0">
                     <li class="my-2 mr-md">
                         <a class="footer__links text-gray" href="#" id="footer-link-apple" target="_blank">
                             <img alt="App Store" title="App Store" src="img/apple.svg">
                         </a>
                     </li>
                     <li class="my-2 mr-md">
                         <a class="footer__links text-gray" href="#" id="footer-link-google" target="_blank">
                             <img alt="Google Play" title="Google Play" src="img/google-play.svg">
                         </a>
                     </li>
                     <li class="my-2">
                         <a class="footer__links text-gray" href="#" id="footer-link-windows" target="_blank">
                             <img alt="Windows Store" title="Windows Store" src="img/windows-store.svg">
                         </a>
                     </li>
                 </ul>
             <div style="margin-top:25px">
           <h5 class="text-gray">Społeczność</h5>
           <ul class="list-unstyled d-flex flex-row flex-wrap justify-content-between mb-0">
                     <li class="m-1">
                         <a class="ikony text-gray" id="footer-link-facebook" target="_blank" href="#">
                             <img alt="FB" title="Facebook" src="entypo_ikony/facebook.svg">
                         </a>
                     </li>
                     <li class="m-1">
                         <a class="footer__links text-gray" id="footer-link-twitter" target="_blank" href="#">
                             <img alt="TW" title="Twitter" src="entypo_ikony/twitter.svg">
                         </a>
                     </li>
                     <li class="m-1">
                         <a class="footer__links text-gray" id="footer-link-youtube" target="_blank" href="#">
                             <img alt="YT" title="Youtube" src="assets/app-footer/social-youtube.svg">
                         </a>
                     </li>
                     <li class="m-1">
                         <a class="footer__links text-gray" id="footer-link-snapchat" target="_blank" href="#">
                             <img alt="SN" title="Snapchat" src="assets/app-footer/social-snapchat.svg">
                         </a>
                     </li>
                     <li class="m-1">
                         <a class="footer__links text-gray" id="footer-link-instagram" target="_blank" href="#">
                             <img alt="IN" title="Instagram" src="assets/app-footer/social-instagram.svg">
                         </a>
                     </li>
                     <li class="m-1">
                         <a class="footer__links text-gray" id="footer-link-soundcloud" target="_blank" href="#">
                             <img alt="SC" title="Soundcloud" src="assets/app-footer/social-soundcloud.svg">
                         </a>
                     </li>
                     <li class="m-1">
                         <a class="footer__links text-gray" id="footer-link-audioboom" target="_blank" href="#">
                             <img alt="AB" title="Audioboom" src="assets/app-footer/social-audioboom.svg">
                         </a>
                     </li>
                 </ul>
               </div>
      </div>
    </div>
    </div>
    <div class="col-md-12 text-center text-gray text-sm pt-md pb-md">
             <p class="m-0">© Transfery.co – Wszelkie prawa zastrzeżone!</p>
         </div>
  </div>
</footer>
<!-- footer -->



<!-- /CONTENT -->

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js" integrity="sha384-KlVcf2tswD0JOTQnzU4uwqXcbAy57PvV48YUiLjqpk/MJ2wExQhg9tuozn5A1iVw" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/js/bootstrap-material-design.js" integrity="sha384-hC7RwS0Uz+TOt6rNG8GX0xYCJ2EydZt1HeElNwQqW+3udRol4XwyBfISrNDgQcGA" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {

  $('body').bootstrapMaterialDesign();

  $('.transfer').on("click", function(){

   //  console.log(this.id);
     window.location.href = "transfer-info.php?id="+this.id;
  });

});

</script>
</body>
</html>
