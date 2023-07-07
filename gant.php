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

<div class="parent17">
    <div class="gant"> </div>
    <div class="ganth2"><h2>Tous nos gants moto</h2><br/>
        <p>Retrouvez l'intégralité des gants moto au même endroit. Pour toutes les saisons : été, mi-saison, hiver. Et toutes les marques : ALPINESTARS, DXR, BERING, IXON, REV'IT, FIVE, FURYGAN, HELSTONS, SEGURA et bien d'autres...</p>
    </div>
</div>

<div class="parent18">
<div class="cardgant"> 

<div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="choix-gant.php"><img src="image/gant1.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Bering</h2><br/>29.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/gant2.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Bering</h2><br/>28.22€€
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/gant3.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>27.90€
                </div>
              </div>
            </div>
          </div>
</div>
</div>

<div class="parent19">
<div class="cardgant2"> 

<div class="card4"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/gant4.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>51.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card5"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/gant5.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Helstons</h2><br/>29.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card6"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/gant6.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Ixon</h2><br/>47.40€
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

.parent17 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.gant { grid-area: 1 / 1 / 2 / 6; }
.ganth2 { grid-area: 1 / 2 / 2 / 5; }

.ganth2 {
    text-align: center;
}

.ganth2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.ganth2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.parent18 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardgant { grid-area: 1 / 1 / 2 / 6; }

.cardgant {
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

.parent19 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardgant2 { grid-area: 1 / 1 / 2 / 6; }

.cardgant2 {
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