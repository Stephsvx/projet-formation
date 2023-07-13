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

<div class="parent42">
    <div class="combinaison"> </div>
    <div class="combinaisonh2"><h2>Toutes nos combinaisons moto</h2><br/>
        <p>Retrouvez l'intégralité de nos combinaisons et toutes les marques sont présentes : ALPINESTARS, DXR, BERING, IXON, REV'IT, KLIM, DAINESE, RICHA, RST, HELSTONS, FURYGAN et bien d'autres...</p>
    </div>
</div>

<div class="parent43">
<div class="cardcombinaison"> 

<div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="choix-combinaison.php"><img src="image/combinaison1.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>DXR</h2><br/>324.90€
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/combinaison2.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Bering</h2><br/>359€
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/combinaison3.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Ixon</h2><br/>569€
                </div>
              </div>
            </div>
          </div>
</div>
</div>

<div class="parent44">
<div class="cardcombinaison2"> 

<div class="card4"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/combinaison4.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Alpinestars</h2><br/>585.77€
                </div>
              </div>
            </div>
          </div>
          <div class="card5"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/combinaison5.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>Ixon</h2><br/>633€
                </div>
              </div>
            </div>
          </div>
          <div class="card6"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <a href="#"><img src="image/combinaison6.jpg" width="200px" height="200pw" alt=""></a>
                    <h2>IXS</h2><br/>566.36€
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

.parent42 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.combinaison { grid-area: 1 / 1 / 2 / 6; }
.combinaisonh2 { grid-area: 1 / 2 / 2 / 5; }

.combinaisonh2 {
    text-align: center;
}

.combinaisonh2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.combinaisonh2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.parent43 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardcombinaison { grid-area: 1 / 1 / 2 / 6; }

.cardcombinaison {
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

.parent44 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.cardcombinaison2 { grid-area: 1 / 1 / 2 / 6; }

.cardcombinaison2 {
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