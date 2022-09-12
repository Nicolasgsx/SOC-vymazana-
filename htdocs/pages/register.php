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
    <script src="/scripts/register.js" defer></script>
    <title>Registrácia</title>
  </head>
  <body style="background-color: #191919;">
    
    <form action="#" class="form">
      <h1 class="text-center">Registračný formulár</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Prihlasovanie"
        ></div>
        <div class="progress-step" data-title="Adresa"></div>
        <div class="progress-step" data-title="Kontakt"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">Meno účtu<br>(Pod týmto menom sa budete prihlasovať)</label>
          <input type="text" name="username" id="username" />
        </div>
        <div class="input-group">
          <label for="password">Heslo</label>
          <input type="password" name="position" id="position" />
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Ďalej</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="name">Meno</label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="input-group">
          <label for="surname">Priezvisko</label>
          <input type="text" name="surname" id="surname" />   
        </div>
        <div class="input-group">
          <label for="street">Ulica</label>
          <input type="text" name="street" id="street" />
        </div>
        <div class="input-group">
          <label for="ciry">Mesto</label>
          <input type="text" name="city" id="city" />
        </div>
        <div class="input-group">
          <label for="psc">PSČ</label>
          <input type="text" name="psc" id="psc" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Predchádzajúce</a>
          <a href="#" class="btn btn-next">Ďalej</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" />
        </div>
        <div class="input-group">
          <label for="number">Telefónne číslo</label>
          <input type="number" name="cislo" id="cislo" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Predchádzajúce</a>
          <a href="#" class="btn btn-next">Ďalej</a>
        </div>
      </div>
      
      </div>
    </form>
  </body>
  
  
</html>
<?php include('../parts/footer.php');?>