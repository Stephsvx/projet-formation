<?php include 'header2.php'; ?>
<?php include 'nav.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="parent5">
        <div class="contenaire"> </div>
        <div class="liste">
          <h2>Espace Route</h2><br>
          <ul>
            <li>Casque </li>
            <li>Blousons</li>
            <li>Gants</li>
            <li>Pantalons</li>
            <li>Combinaisons</li>
            <li>Bottes</li>
            <li>Protections</li>
            <li>Accessoires</li>
          </ul><br>
          <h2>Espace Cross</h2><br>
          <ul>
            <li>Casque </li>
            <li>Blousons</li>
            <li>Gants</li>
            <li>Pantalons</li>
            <li>Combinaisons</li>
            <li>Bottes</li>
            <li>Protections</li>
            <li>Accessoires</li>
          </ul><br>
          <h2>Espace Circuit</h2><br>
          <ul>
            <li>Casque </li>
            <li>Blousons</li>
            <li>Gants</li>
            <li>Pantalons</li>
            <li>Combinaisons</li>
            <li>Bottes</li>
            <li>Protections</li>
            <li>Accessoires</li>
          </ul>
        </div>
        <div class="card1"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/casque route.png" width="200px" height="200pw" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card2"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/gant.png" width="200px" height="200pw" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card3"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/blouson.png" width="200px" height="200pw" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card4"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/pantalons.png" width="200px" height="200pw" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card5"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/combinaison.png" width="200px" height="200pw" alt="">
              </div>  
            </div>
          </div>
        </div>
        <div class="card6"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/botte.png" width="200px" height="200pw" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card7"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/protection.png" width="200px" height="200pw" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="card8"> 
          <div class="position">
            <div class="conteneur conteneur-1">
              <div class="produits">
                  <img src="image/accessoire.png" width="200px" height="200pw" alt="">
              </div> 
            </div>
          </div>
        </div>
        <div class="titre2"> A un clic de l'équipement qu'il vous faut </div>
    </div>

</body>

<?php include 'footer.php'; ?>

</html>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}

.parent5 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: repeat(5, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.contenaire { grid-area: 1 / 1 / 6 / 6; }
.liste { grid-area: 1 / 1 / 6 / 2; }
.card1 { grid-area: 1 / 2 / 3 / 3; }
.card2 { grid-area: 1 / 3 / 3 / 4; }
.card3 { grid-area: 1 / 4 / 3 / 5; }
.card4 { grid-area: 1 / 5 / 3 / 6; }
.card5 { grid-area: 4 / 2 / 6 / 3; }
.card6 { grid-area: 4 / 3 / 6 / 4; }
.card7 { grid-area: 4 / 4 / 6 / 5; }
.card8 { grid-area: 4 / 5 / 6 / 6; }
.titre2 { grid-area: 3 / 2 / 4 / 6; }

.contenaire{
    display: flex;
    flex-wrap: wrap;
    background: linear-gradient(to bottom, #00d4ff, #ec6262);
}

.liste {
    height: 600px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.card4{
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.card5{
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.card6{
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.card7{
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.card8{
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
    border: 2px solid rgb(205, 227, 8);
    border-radius: 4px;
    transition: all .3s ease;
    border-radius: 5%;
    box-shadow: black 2px 2px 3px;
}
  
.conteneur > *{
    flex: 1 1 100%;
}

.titre2{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 60px;
}

</style>