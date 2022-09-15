<?php 
include('../parts/header.php');
?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="register.css" />
    
    <title>Prihlásenie</title>
  </head>
  <body style="background-color: #191919;">
    
    <form action="#" class="form">
      <h1 class="text-center">Vitajte späť!<br>Prihláste sa!</h1>
     
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">Meno účtu</label>
          <input type="text" name="username" id="username" />
        </div>
        <div class="input-group">
          <label for="password">Heslo</label>
          <input type="password" name="password" id="password" />
        </div>
        <div class="">
          <a href="https://www.meme-arsenal.com/memes/3db8c7970572d1191386121c1d75cd31.jpg" class="btn btn-next width-50 ml-auto">Ďalej</a>
        </div>
      </div>
    </form>
  </body>
  
  
</html>
<?php include('../parts/footer.php');?>