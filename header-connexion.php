<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d2de6ecd94.js" crossorigin="anonymous"></script>
    <title>Le Labomoto</title>
</head>
<body>

<div class="parent">
    <div class="div1"> </div>
    <div class="div3"><img src="image/labomoto-removebg-preview.png" alt="" width="200px" height="200px"> </div>
    <div class="div4"> 

        <input type="text" class="search-input" placeholder="Rechercher">
        <button class="search-button">
            <i class="fas fa-search"></i>
        </button> 

    </div>
    
    <div class="div5"> 
          
          <button class="compte">
            <i class="fas fa-user"></i>
            Connexion / Inscription
          </button>
    </div>
  </div>

</body>

<script>
     // Récupérer les références des boutons
  var compteButton = document.querySelector('.compte');
  
  // Ajouter un gestionnaire d'événements de clic au bouton "Compte"
  compteButton.addEventListener('click', function() {
    window.location.href = 'connexion.php';
  });
 
</script>

</html>

<style>
     
@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style: none;
}


/*header*/

.parent {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.div1 { grid-area: 1 / 1 / 2 / 7; }
.div2 { grid-area: 1 / 1 / 2 / 2; }
.div3 { grid-area: 1 / 2 / 2 / 3; }
.div4 { grid-area: 1 / 3 / 2 / 6; }
.div5 { grid-area: 1 / 6 / 2 / 7; }

.div1 {
    height: 200px;
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
}

.div4 {
    display: flex;
    align-items: center;
    width: 700px;
    border-radius: 20px;
    padding: 5px;
}
      
.search-input {
    border: solid 2px white;
    flex: 1;
    background: none;
    padding: 5px;
    font-size: 16px;
    font-family: 'Roboto', sans-serif;
    color: white;

}
      
.search-button {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
}

.search-button i {
    font-size: 20px;
    color: white;
}
      
.div5 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    
}

.compte {
  border: none;
  background: none;
  cursor: pointer;
  padding: 5px;
  color: white;
  font-size: 15px;
  font-family: 'Roboto', sans-serif;
}

.compte i {
  font-size: 60px;
}
/*fien header*/
    </style>