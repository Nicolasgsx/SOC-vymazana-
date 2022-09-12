<?php include('../parts/header.php');?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
<title>MotoSvet</title>
<style>
.space{
    margin: 20px;

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
      <img src="/images/slider1.png" alt="Motorky" width="1280" height="720">
      <div class="carousel-caption d-none d-md-block">
    <h4><span style="background-color: black;">Motocykle</span></h4>
    <p style="color:black;"><strong><h6><span style="background-color: black;">U nás nájdete takmer všetky typy motocyklov značky Suzuki!</span></h6></strong></p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="/images/slider2.png" alt="Moto Výstroj" width="1280" height="720">
      <div class="carousel-caption d-none d-md-block">
    <h4><span style="background-color: black;">Výstroj</h4>
    <p style="color:black;"><strong><h6><span style="background-color: black;">U nás nájdete celú výstroj na motorku rôznych značiek!</span></h6></strong></p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="/images/diely.png" alt="Diely" width="1280" height="720">
      <div class="carousel-caption d-none d-md-block">
    <h4><span style="background-color: black;">Diely</h4>
    <p style="color:black;"><strong><h6><span style="background-color: black;">Máme všetko čo potrebujete k údržbe, náhradné diely, príslušenstvo!</span></h6></strong></p>
  </div>
    </div>
  </div>
  
</div>
<div class="space"></div>

<div class="container">
    <h2>Najobľúbenejšie</h2>
    <div class="row">
        <div class="col-md-3">
        <div class="product-top">
                <img src=/images/buycart.png width="100" height="100">
                <div>
                    <h3>Suzuki Gsxr-1000</h3>
                    <h5>Najlepsi maly popis</h5>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>
<?php include('../parts/footer.php');?>