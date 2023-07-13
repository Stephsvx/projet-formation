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

<div class="parent34">
    <div class="botte"> </div>
    <div class="botteh2"><h2>Toutes nos bottes et baskets moto</h2><br/>
        <p>Profitez d'offres exceptionnelles pendant les soldes d'été Motoblouz, pour trouver chaussure à votre pied. Bottes et baskets vous attendent chez les plus grandes marques : Alpinestars, DXR, Dainese, Rev'It, Richa, IXS et bien d'autres...</p>
    </div>
</div>

<div class="parent35">
<div class="cardbotte"> 

<div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="choix-botte.php"><img src="image/botte1.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Bering</h2><br/>89.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/botte2.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>71.92€
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/botte3.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Ixon</h2><br/>129.90€
                </div>
              </div>
            </div>
          </div>
</div>
</div>

<div class="parent36">
<div class="cardbotte2"> 

<div class="card4"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/botte4.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>89.52€
                </div>
              </div>
            </div>
          </div>
          <div class="card5"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/botte5.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>TCX</h2><br/>139.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card6"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/botte6.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>95.92€
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

.parent34 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.botte { grid-area: 1 / 1 / 2 / 6; }
.botteh2 { grid-area: 1 / 2 / 2 / 5; }

.botteh2 {
    text-align: center;
}

.botteh2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.botteh2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.parent35 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardbotte { grid-area: 1 / 1 / 2 / 6; }

.cardbotte {
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

.parent36 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardbotte2 { grid-area: 1 / 1 / 2 / 6; }

.cardbotte2 {
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