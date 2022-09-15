<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Motocykle</title>
    <style>

*{
    margin: 0;
    padding: 0;
}

body{
    flex-direction: column;
}

footer{
    
    position: relative;
    bottom: 0;
    background: #111;
    height: auto;
    width: 100vw;
    font-family: "Open Sans";
    padding-top: 40px;
    color: #fff;
}

.footer-content{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    text-align: center;
}

.footer-content h3{
    font-size: 1.8rem;
    font-weight: 400;
    text-transform: capitalize;
}

.footer-content p{
    max-width: 500px;
    margin: 10px auto;
    line-height: 28px;
    font-size: 14px;
}

.siete{
    
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1rem 0 3rem 0;

}

.siete li{
    
    margin: 0 10px;
}

.siete a{
    
    text-decoration: none;
    color: #fff;
}

.siete a i{
    
    font-size: 1rem;
    transition: color .4s ease;
    
}

.siete a:hover i{
    color: cyan;
}

.footer-dole{
    background: #000;
    width: 100vw;
    padding: 20px 0;
    text-align: center;
}

.footer-dole p{
    font-size: 14px;
    word-spacing: 2px;
    text.transform: capitalize;
}


    </style>
</head>

<body>
<footer>
    
    <div class="footer-content">
        <h3>Motosvet.com</h3>
        <p>Tu pojde nejaky zaujimavy popis ktory nikto nikdy necita</p>
        <ul class="siete">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <p>Je to tu nejako na krivo :)</p>
        </ul>
    </div>
    <div class="footer-dole">
        <p>Copyright &copy;2022 MotoSvet. </p>
</footer>

</body>

</html>