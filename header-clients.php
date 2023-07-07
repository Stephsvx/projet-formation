<?php
session_start();
$prenom = isset($_SESSION['prenom']) ? $_SESSION['prenom'] : '';
?>

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
    <div class="div2"><button class="b1" onclick="openNav()">Catégories</button></div>
    <div class="div3"><a href="acceuil-clients.php"><img src="image/labomoto-removebg-preview.png" alt="" width="200px" height="200px"></a> </div>
    <div class="div4"> 

        <input type="text" class="search-input" placeholder="Rechercher">
        <button class="search-button">
            <i class="fas fa-search"></i>
        </button> 

    </div>
    
    <div class="div5"> 

        <button class="panier">
            <i class="fas fa-shopping-cart"></i>
            Panier
        </button>
          
        <button class="compte">
            <i class="fas fa-user"></i>
            <?php echo $prenom; ?>
        </button>

        <?php 
            if (isset($_POST['deco'])) {
            session_unset();
            session_destroy();
            header("location: index.php");
            exit();
            }
        ?>
        <form method="POST" action="">
        <button type="submit" name="deco" class="deconnexion">
            <i class="fa-solid fa-power-off"></i>
              Deconnexion
        </button>
        </form>
    </div>
</div>

<nav id="nav">
    <button class="b2" onclick="closeNav()">Retour</button>
    <a href="casque.php" class="navlink">Casques</a>
    <a href="blouson.php" class="navlink">Blousons</a>
    <a href="gant.php" class="navlink">Gants</a>
    <a href="pantalon.php" class="navlink">Pantalons</a>
    <a href="combinaison.php" class="navlink">Combinaisons</a>
    <a href="botte.php" class="navlink">Bottes</a>
    <a href="protection.php" class="navlink">Protections</a>
    <a href="accessoire.php" class="navlink">Accessoires</a>
</nav>

</body>
<script src="test2.js"></script>
<script>
     // Récupérer les références des boutons
var compteButton = document.querySelector('.panier');
  
  // Ajouter un gestionnaire d'événements de clic au bouton "Compte"
  compteButton.addEventListener('click', function() {
window.location.href = 'panier.php';

});

// Récupérer les références des boutons
var compteButton = document.querySelector('.compte');
  
// Ajouter un gestionnaire d'événements de clic au bouton "Compte"
compteButton.addEventListener('click', function() {
window.location.href = 'compte.php';

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
/*menu slide*/
body{
    transition: 3s ease;
}


nav{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    width: 0;
    height: 100vh;
    background-image: url('image/fond moto.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    box-shadow: black 0 2px 2px 5px;
    transform: translate(-20vw);
    transition: 3s ease;
    position: fixed;
    top: 0;
    z-index: 1;
    
}

.navlink{
    text-decoration: none;
    font-size: 3em;
    font-weight: bold;
    color: rgb(248, 247, 247);
    transition: 3s ease;
}
.navlink:hover{
    
    color: rgb(11, 11, 11);
    text-shadow: rgb(5, 237, 198) 5px 10px 5px;
}

a{
    text-decoration: none;
    color: rgb(237, 231, 231);
    font-size: 5em;
}

.b1{
    border: solid 2px white;
    border-radius: 30px;
    padding: 10px;
    margin: 10px;
    background: rgb(0,212,255);
    background: linear-gradient(180deg, rgba(0,212,255,1) 0%, rgba(9,9,121,1) 58%, rgba(2,0,36,1) 100%);
    color: #fff;
    font-size: 1em;
    cursor: pointer;
}

.b2{
    border: solid 2px white;
    border-radius: 30px;
    padding: 10px;
    margin: 10px;
    background: rgb(0,212,255);
    background: linear-gradient(180deg, rgba(0,212,255,1) 0%, rgba(9,9,121,1) 58%, rgba(2,0,36,1) 100%);
    color: #fff;
    font-size: 1em;  
    cursor: pointer;
}
/*fin menu slide*/

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

.div2 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.div4 {
    display: flex;
    align-items: center;
    width: 500px;
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
    justify-content: space-between;
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

.panier {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
    color: white;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
}

.deconnexion {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px;
    color: white;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
}

.panier i {
    font-size: 40px;
}

.compte i {
  font-size: 40px;
}

.deconnexion i {
    font-size: 40px;
}
/*fien header*/
    </style>