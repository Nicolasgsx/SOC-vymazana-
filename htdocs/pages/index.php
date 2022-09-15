<?php include('../parts/header.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
<title>MotoSvet</title>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }
  body{
    width: 100%;
    align-items: center;
    justify-content: center;
  }
  .produkty{
    padding-left: 230px;
    padding-right: 45px;
    color: black;
    width: 90%;
    height: 100%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 35px;
  }
  .produkty .karta{
    
    background-color: white;
    width: 270px;
    overflow: hidden;
    border: 2px solid black;
    border-radius: 15px;
    box-shadow: 0 0 4px white;
    text-align: center;
  }
  .produkty .karta .obrazok-produkt{
    width: 230px;
    margin: 20px auto;
  }
  .produkty .karta .obrazok-produkt img{
    width: 100%;
    transition: 0.5s;
  }
  .produkty .karta .obrazok-produkt img:hover{
    transform: scale(1.1);
  }
  .produkty .karta .info-produkt h4{
    font-size: 18px;
    padding: 0 25px;
    margin-bottom: 10px;
  }
  .produkty .karta .btn{
    width: 100%;
  }
  .produkty .karta .btn button{
    width: 100%;
    padding: 10px;
    background: green;
    border: 1px solid gray;
    outline: none;
    color: white;
    cursor: pointer;
    font-size: 20px;
    border-radius: 20px;
    transition: 0.3s;
  }
  .produkty .karta .btn button:hover{
    transform: scale(1.05);
  }
.space{
    margin: 20px;

}
.napis{
  padding-left: 230px;
  font-size: 30px;
}
</style>    
</head>
<body style="background-color: #191919; color:white">

<div class="space"></div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" style="text-align: center;">
    <div class="carousel-item active">
      <img src="/images/slider1.png" alt="Motorky" width="75%" height="auto">
      <div class="carousel-caption d-none d-md-block">
    <h4><span style="background-color: black;">Motocykle</span></h4>
    <p style="color:black;"><strong><h6><span style="background-color: black;">U nás nájdete takmer všetky typy motocyklov značky Suzuki!</span></h6></strong></p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="/images/slider2.png" alt="Moto Výstroj" width="75%" height="auto">
      <div class="carousel-caption d-none d-md-block">
    <h4><span style="background-color: black;">Výstroj-vymeniť obrázok zlá kvalita a pomer stran</h4>
    <p style="color:black; width=100%; height=auto;"><strong><h6><span style="background-color: black;">U nás nájdete celú výstroj na motorku rôznych značiek!</span></h6></strong></p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="/images/diely.png" alt="Diely" width="75%" height="auto">
      <div class="carousel-caption d-none d-md-block">
    <h4><span style="background-color: black;">Diely-opraviť kraje obrázku</h4>
    <p style="color:black;"><strong><h6><span style="background-color: black;">Máme všetko čo potrebujete k údržbe, náhradné diely, príslušenstvo!</span></h6></strong></p>
  </div>
    </div>
  </div>
  
</div>
<div class="space"></div>
<span class="napis">Najobľúbenejšie:</span>
<div class="produkty">
<div class="karta">
    <div class="obrazok-produkt">
        <img src="/images/slider1.png" alt="Produkt">
    </div>
      <div class="info-produkt">
        <h4>Najlepsi produkt na svete</h4>
        <h4>500€</h4>
      </div>
    <div class="btn">
      <button type="button">Pridať do košíka</button>
    </div>
  </div>
  <div class="karta">
    <div class="obrazok-produkt">
        <img src="/images/slider2.png" alt="Produkt">
    </div>
      <div class="info-produkt">
        <h4>Najlepsi produkt na svete</h4>
        <h4>500€</h4>
      </div>
    <div class="btn">
      <button type="button">Pridať do košíka</button>
    </div>
  </div>
  <div class="karta">
    <div class="obrazok-produkt">
        <img src="/images/registerback.png" alt="Produkt">
    </div>
      <div class="info-produkt">
        <h4>Najlepsi produkt na svete</h4>
        <h4>500€</h4>
      </div>
    <div class="btn">
      <button type="button">Pridať do košíka</button>
    </div>
  </div>
  <div class="karta">
    <div class="obrazok-produkt">
        <img src="/images/slider1.png" alt="Produkt">
    </div>
      <div class="info-produkt">
        <h4>Najlepsi produkt na svete</h4>
        <h4>500€</h4>
      </div>
    <div class="btn">
      <button type="button">Pridať do košíka</button>
    </div>
  </div>
</div>

</body>
</html>
<?php include('../parts/footer.php');?>