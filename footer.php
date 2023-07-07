

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="parent8">
  <div class="footer"> </div>
  <div class="mentions">Mentions legale<br/>cookies </div>
  <div class="contact">TEL : 0322289467<br/>MAIL : e.mail@mail.fr</div>
  <div class="reseaux"> 
    <a href="https://www.facebook.com/" target="_blank"><img class="facebook" src="image/facebook.png" alt="logo de facebook"></a>
    <a href="https://www.instagram.com/" target="_blank"><img class="instagram" src="image/instagram.png" alt="logo d'instagram"></a>
    <a href="https://twitter.com/?lang=fr" target="_blank"><img class="twitter" src="image/twitter.png" alt="logo de twitter"></a>
  </div>
  <div class="paiement"> 
    <img src="image/logo2.jpg" alt="logo paiement">
  </div>
  <div class="logo2"><img src="image/labomoto-removebg-preview.png" alt="" width="200px" height="200px"></div>
</div>

</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

/* footer*/
.parent8 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.footer { grid-area: 1 / 1 / 2 / 6; }
.mentions { grid-area: 1 / 1 / 2 / 2; }
.contact { grid-area: 1 / 2 / 2 / 3; }
.reseaux { grid-area: 1 / 4 / 2 / 5; }
.paiement { grid-area: 1 / 5 / 2 / 6; }
.logo2 { grid-area: 1 / 3 / 2 / 4; }

.footer{
    display: flex;
    height: 300px;
    background-image: url(image/fond2.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    flex-wrap: wrap;
}

.mentions {
    display: flex;
    justify-content: center;
    align-items: center;
    line-height: 30px;
    color: white;
}

.contact {
    display: flex;
    justify-content: center;
    align-items: center;
    line-height: 30px;
    color: white;
}

.reseaux {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.paiement {
    align-items: center;
    justify-content: center;
    display: flex;
}
/*fin footer*/

</style>