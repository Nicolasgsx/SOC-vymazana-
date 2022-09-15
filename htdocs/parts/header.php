<!DOCTYPE html>
<html lnag="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>


    <style>

p {
  font-size:0.85vw;
}

.button-1 {
    align-items: center;
    background-color: cyan;
    border: 0;
    border-bottom-left-radius:100px;
    border-top-left-radius:100px;
    box-sizing: border-box;
    color: black;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
  }
  
  .button-1:focus { 
    background-color: #16437E;
    color: #ffffff;
  }
  
  .button-1:active {
    background: #09223b;
    color: rgb(255, 255, 255, .7);
  }
  
  .button-1:disabled { 
    cursor: not-allowed;
    background: rgba(0, 0, 0, .08);
    color: rgba(0, 0, 0, .3);
  }

  .button-2 {
    align-items: center;
    background-color: white;
    border: 0;
    border-bottom-right-radius:100px;
    border-top-right-radius:100px;
    box-sizing: border-box;
    color: black;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
  }
  
  .button-2:focus { 
    background-color: #16437E;
    color: #ffffff;
  }
  
  .button-2:active {
    background: #09223b;
    color: rgb(255, 255, 255, .7);
  }
  
  .button-2:disabled { 
    cursor: not-allowed;
    background: rgba(0, 0, 0, .08);
    color: rgba(0, 0, 0, .3);
  }

  .button-3 {
    background-color: transparent;
    background-repeat: no-repeat;
    border: none;
    cursor: pointer;
    overflow: hidden;
    outline: none;

  }

  .button-4 {
    align-items: center;
    background-color: lightpink;
    border: 0;
    border-bottom-left-radius:100px;
    border-top-left-radius:100px;
    box-sizing: border-box;
    color: black;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    width: 150px;
  }
  
  .button-4:focus { 
    background-color: #16437E;
    color: #ffffff;
  }
  
  .button-4:active {
    background: #09223b;
    color: rgb(255, 255, 255, .7);
  }
  
  .button-4:disabled { 
    cursor: not-allowed;
    background: rgba(0, 0, 0, .08);
    color: rgba(0, 0, 0, .3);
  }


  .button-5 {
    align-items: center;
    background-color: lightpink;
    border: 0;
    box-sizing: border-box;
    color: black;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    width: 150px;
  }
  
  .button-5:focus { 
    background-color: #16437E;
    color: #ffffff;
  }
  
  .button-5:active {
    background: #09223b;
    color: rgb(255, 255, 255, .7);
  }
  
  .button-5:disabled { 
    cursor: not-allowed;
    background: rgba(0, 0, 0, .08);
    color: rgba(0, 0, 0, .3);
  }

  .button-6 {
    align-items: center;
    background-color: lightpink;
    border: 0;
    border-bottom-right-radius:100px;
    border-top-right-radius:100px;
    box-sizing: border-box;
    color: black;
    cursor: pointer;
    display: inline-flex;
    font-family: -apple-system, system-ui, system-ui, "Segoe UI", Roboto, "Helvetica Neue", "Fira Sans", Ubuntu, Oxygen, "Oxygen Sans", Cantarell, "Droid Sans", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Lucida Grande", Helvetica, Arial, sans-serif;
    font-size: 16px;
    font-weight: 600;
    justify-content: center;
    line-height: 20px;
    max-width: 480px;
    min-height: 40px;
    min-width: 0px;
    overflow: hidden;
    padding: 0px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    touch-action: manipulation;
    transition: background-color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, box-shadow 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s, color 0.167s cubic-bezier(0.4, 0, 0.2, 1) 0s;
    user-select: none;
    -webkit-user-select: none;
    vertical-align: middle;
    width: 150px;
  }
  
  .button-6:focus { 
    background-color: #16437E;
    color: #ffffff;
  }
  
  .button-6:active {
    background: #09223b;
    color: rgb(255, 255, 255, .7);
  }
  
  .button-6:disabled { 
    cursor: not-allowed;
    background: rgba(0, 0, 0, .08);
    color: rgba(0, 0, 0, .3);
  }

    </style>

<body>
    <link rel="stylesheet" href="header.css">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black">
            <div class="container-fluid">
                <a href="index.php">
            <button class="button-3" ><img src="/images/motosvet.png" alt="Submit" width=230px height=45px ></button></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            

                        <a href="bikes.php"><button class="button-4" role="button">Motocykle</button></a>
                        <a href="oblecenie.php"><button class="button-5" role="button">Oblečenie</button></a>
                        <a href="prislus.php"><button class="button-5" role="button">Príslušenstvo</button></a>
                        <a href="diely.php"><button class="button-5" role="button">Diely</button></a>
                        <a href="kontakt.php"><button class="button-6" role="button">Kontakt</button></a>


                        </li>
                    </ul>
                    <?php if (!isset($_SESSION["username"])) : ?>
                        <div>
                        <button class="button-3"><img src="/images/buycart.png" alt="Submit" width=45px height=45px ></button>  
                        <a href="register.php"><button class="button-1" role="button">Registrácia</button></a>
                        <a href="login.php"><button class="button-2" role="button">Prihlásenie</button></a>
                        </div>
                    <?php else : ?>
                        <div class="d-flex align-items-center">
                            <p class="text-light mx-3 mb-0">
                                <?php include('../scripts/session.php');?>
                                <a href="../pages/profile.php<?php  echo "?user=".$id;?>"class="text-decoration-none text-light"><?php echo $user; ?>
                                <a href="../pages/profile.php<?php  echo "?user=".$id;?>"class="text-decoration-none"> <img src="../images/<?php  echo $avatar;?>"   style="width: 40px">
                            </p>
                            <a href="../scripts/logout.php" class="btn btn-danger">Odhlásiť sa</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>