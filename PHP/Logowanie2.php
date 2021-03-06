<!DOCTYPE html>
<html>
  <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body>


    <div class="container">
	<div class="row">

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Logowanie do serwisu Transfery.co</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Logowanie</h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Hasło</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Zaloguj</span></button>
      </div>
      <div class="footer"><a href="#">Nie pamiętasz hasła?</a></div>
    </form>
  </div>



  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Rejestracja
      <div class="close"></div>
    </h1>
    <form method="post" action="register.php">
      <div class="input-container">
        <input type="text" id="Username" name="login" required="required"/>
        <label for="Username">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text" id="User" name="email" required="required"/>
        <label for="Email">Email</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="haslo" required="required"/>
        <label for="Password">Hasło</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Repeat Password" name="powtorz_haslo" required="required"/>
        <label for="Repeat Password">Powtórz Hasło</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" name="wyslano"><span>Dalej</span></button>
      </div>
    </form>
  </div>
</div>
<!-- Portfolio--><a id="portfolio" href="index.html" title="View my portfolio!">Home<i class="fa fa-link"></i></a>
	</div>
</div>


<script type="text/javascript">

      $(document).ready(function(){
      $('.toggle').on('click', function() {
      $('.container').stop().addClass('active');
      });

      $('.close').on('click', function() {
      $('.container').stop().removeClass('active');
      });

      });
</script>
  </body>
</html>
