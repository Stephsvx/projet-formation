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

<div class="parent13">
<div class="casque"> </div>
<div class="casqueh2"><h2>Tous nos casques</h2><br/>
<p>Retrouvez l'intégralité des casques au même endroit, avec tous les types : casque intégral, casque modulable, casque jet, casque cross, casque trail. Bien entendu, toutes les marques sont au rendez-vous : SHARK, HJC, DEXTER, SCORPION EXO, SHOEI, ROOF, NOLAN, X-LITE, FOX, AIROH, ALPINESTARS, NEXX, etc...</p>
</div>
</div>

<div class="parent14">
<div class="cardcasque"> 

<div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="choix-casque.php"><img src="image/casque1.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Dexter</h2><br/>71.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/casque2.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Dexter</h2><br/>67.40€
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/casque3.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Dexter</h2><br/>84.90€
                </div>
              </div>
            </div>
          </div>
</div>
</div>

<div class="parent15">
<div class="cardcasque2"> 

<div class="card4"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/casque4.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Scorpion exo</h2><br/>102.68€
                </div>
              </div>
            </div>
          </div>
          <div class="card5"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/casque5.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Dexter</h2><br/>84.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card6"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/casque6.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Dexter</h2><br/>89.90€
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

.parent13 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.casque { grid-area: 1 / 1 / 2 / 6; }
.casqueh2 { grid-area: 1 / 2 / 2 / 5; }

.casqueh2 {
    text-align: center;
}

.casqueh2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.casqueh2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.parent14 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardcasque { grid-area: 1 / 1 / 2 / 6; }

.cardcasque {
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

.parent15 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardcasque2 { grid-area: 1 / 1 / 2 / 6; }

.cardcasque2 {
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