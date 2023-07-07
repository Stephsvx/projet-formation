<?php include 'header-clients.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Labomoto</title>
</head>
<body>

<div class="parent25">
    <div class="pantalons"> </div>
    <div class="pantalonh2"><h2>Tous nos pantalons et jeans moto</h2><br/>
        <p>Retrouvez l'intégralité des pantalons moto & jeans moto au même endroit. Pantalons en textile, en cuir, ou encore jeans moto renforcés. Tout y est, chez toutes les marques : ALPINESTARS, DXR, REV'IT, IXON, BERING, FURYGAN, RST, RICHA et bien d'autres...</p>
    </div>
</div>

<div class="parent26">
<div class="cardpantalon"> 

<div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="choix-pantalon.php"><img src="image/pantalon1.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>90.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/pantalon2.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>97.40€
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/pantalon3.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Bering</h2><br/>101.15€
                </div>
              </div>
            </div>
          </div>
</div>
</div>

<div class="parent27">
<div class="cardpantalon2"> 

<div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/pantalon4.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Rev It</h2><br/>379.99€
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/pantalon5.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>95.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/pantalon6.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>90.90€
                </div>
              </div>
            </div>
          </div>
</div>
</div>


</body>

<?php include 'footer.php'; ?>

</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}

.parent25 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.pantalon { grid-area: 1 / 1 / 2 / 6; }
.pantalonh2 { grid-area: 1 / 2 / 2 / 5; }

.pantalonh2 {
    text-align: center;
}

.pantalonh2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.pantalonh2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.parent26 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardpantalon { grid-area: 1 / 1 / 2 / 6; }

.cardpantalon {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card1{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
  }
  
  .position{
    display: flex;
    align-items: center;
  }
  .conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    /*border: 2px solid rgb(8, 158, 227);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;*/
  }
  
  .conteneur > *{
    flex: 1 1 100%;
  }

  .card2{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
  }
  
  .position{
    display: flex;
    align-items: center;
  }
  .conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
   /* border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;*/
  }
  
  .conteneur > *{
    flex: 1 1 100%;
  }

.card3{
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
}
  
.position{
    display: flex;
    align-items: center;
}

.conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    /*border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;*/
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.parent27 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardpantalon2 { grid-area: 1 / 1 / 2 / 6; }

.cardpantalon2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card4 {
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
  }
  
  .position{
    display: flex;
    align-items: center;
  }
  .conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    /*border: 2px solid rgb(8, 158, 227);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;*/
  }
  
  .conteneur > *{
    flex: 1 1 100%;
  }

  .card5 {
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
  }
  
  .position{
    display: flex;
    align-items: center;
  }
  .conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
   /* border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;*/
  }
  
  .conteneur > *{
    flex: 1 1 100%;
  }

.card6 {
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
    padding: 30px;
    
}
  
.position{
    display: flex;
    align-items: center;
}

.conteneur{
    display: flex;
    flex-wrap: wrap;
    flex: 1;
    margin: 20px;
    padding: 20px;
    /*border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;*/
}
  
.conteneur > *{
    flex: 1 1 100%;
}
</style>