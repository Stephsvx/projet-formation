<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Labomoto</title>
</head>
<body>

<div class="parent2">
    <div class="titre">
        <h1 id="titreH1">Le Labomoto</h1><br/>
        <p id="paragraphe">Tout pour vous et votre moto</p>
    </div>
</div>



<div class="parent3">
    <div class="image"><img src="image/baniere.webp" alt="" width="1000px" > </div>
</div>

<div class="parent4">
    <div class="categorie"><p>Nos Catégories</p></div>
</div>

<div class="parent5">
    <div class="produits"> </div>
    <div class="card"> 

        <div class="card1"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/casque route.png" width="100px" height="100pw" alt="">
                    <h2>Casques</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card2"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/gant.png" width="100px" height="100pw" alt="">
                    <h2>Gants</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card3"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/blouson.png" width="100px" height="100pw" alt="">
                    <h2>Blousons</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card4"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/pantalons.png" width="100px" height="100pw" alt="">
                    <h2>Pantalons</h2>
                </div>
              </div>
            </div>
          </div>

    </div>

    <div class="cards">

        <div class="card5"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/combinaison.png" width="100px" height="100pw" alt="">
                    <h2>Combies</h2>
                </div>  
              </div>
            </div>
          </div>
          <div class="card6"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/botte.png" width="100px" height="100pw" alt="">
                    <h2>Bottes</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card7"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/protection.png" width="100px" height="100pw" alt="">
                    <h2>Protection</h2>
                </div>
              </div>
            </div>
          </div>
          <div class="card8"> 
            <div class="position">
              <div class="conteneur conteneur-1">
                <div class="produits">
                    <img src="image/accessoire.png" width="100px" height="100pw" alt="">
                    <h2>Accessoires</h2>
                </div> 
              </div>
            </div>
          </div>

    </div>    
</div>

<div class="parent6">
  <div class="marque"><p>Vos Marques préférées</p> </div>
    <div class="container">
        <img name="image" width="600" height="600">
    <script>
     var image = [];
        image[0] = "image/1.jpg";
        image[1] = "image/2.jpg";
        image[2] = "image/3.jpg";
        image[3] = "image/4.jpg";
        image[4] = "image/5.jpg";
        var i = 0;
        var timer = 3000;
       
        function changerimage() {
            document.image.src = image[i];
            if (i<image.length - 1) {
                i++;
            } 
            else {
                i=0;
            }
            setTimeout(changerimage, timer);
        }
        window.onload = changerimage;
    </script>
    </div>
</div>


</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}

/*titre*/
.parent2 {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.titre { grid-area: 1 / 1 / 2 / 7;
    
}

.titre {
    position: relative;
    overflow: hidden;
}

.titre h1 {
    position: relative;
    animation-name: arrivee-de-gauche;
    animation-duration: 1s;
    animation-delay: 0.5s;
    animation-fill-mode: forwards;
    font-size: 100px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

.titre p {
    position: relative;
    animation-name: arrivee-de-droite;
    animation-duration: 1s;
    animation-delay: 1s;
    animation-fill-mode: forwards;
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

@keyframes arrivee-de-gauche {
    from {
        left: -100%;
        opacity: 0;
    }
    to {
        left: 0;
        opacity: 1;
    }
}

@keyframes arrivee-de-droite {
    from {
        right: -100%;
        opacity: 0;
    }
    to {
        right: 0;
        opacity: 1;
    }
}
/*fin titre*/

/*baniere*/
.parent3 {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.image { grid-area: 1 / 1 / 2 / 7; }

.image {
    display: flex;
    justify-content: center;
    position: relative;
    animation-name: arrivee-du-bas;
    animation-duration: 1s;
    animation-delay: 1s;
    animation-fill-mode: forwards;

}

@keyframes arrivee-du-bas {
    from {
        bottom: -100%;
        opacity: 0;
    }
    to {
        bottom: 0;
        opacity: 1;
    }
}
/*fin baniere*/

/*categories*/
.parent4 {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.categorie { grid-area: 1 / 1 / 2 / 7; }

.categorie p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
}

.parent5 {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-template-rows: repeat(2, 1fr);
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.produits { grid-area: 1 / 1 / 3 / 7; }
.card { grid-area: 1 / 2 / 2 / 6; 
    display: flex;
    justify-content: space-between;
    align-items: center;

}

.cards { grid-area: 2 / 2 / 3 / 6;
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
    border: 2px solid rgb(8, 158, 227);
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
/*fin categories*/

/*marques*/
.parent6 {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
}
    
.marque { grid-area: 1 / 1 / 2 / 2; }

.marque p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
/*fin marques*/

</style>