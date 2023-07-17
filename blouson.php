<?php include 'header-clients.php'; ?>

<?php
//inclure la page de connexion
 include_once "base-de-donnee.php";
 //verifier si une session existe
 if(!isset($_SESSION)){
    //si non demarer la session
   // session_start();
 }
 //creer la session
 if(!isset($_SESSION['panier'])){
    //s'il nexiste pas une session on créer une et on mets un tableau a l'intérieur 
    $_SESSION['panier'] = array();
 }
 //récupération de l'id dans le lien
  if(isset($_GET['id'])){//si un id a été envoyé alors :
    $id = $_GET['id'] ;
    //verifier grace a l'id si le produit existe dans la base de  données
    $produit = mysqli_query($con ,"SELECT * FROM produits3 WHERE id = $id") ;
    if(empty(mysqli_fetch_assoc($produit))){
        //si ce produit n'existe pas
        die("Ce produit n'existe pas");
    }
    //ajouter le produit dans le panier ( Le tableau)

    if(isset($_SESSION['panier'][$id])){// si le produit est déjà dans le panier
        $_SESSION['panier'][$id]++; //Représente la quantité 
    }else {
        //si non on ajoute le produit
        $_SESSION['panier'][$id]= 1 ;
    }

   //redirection vers la page index.php
   header("location: panier.php");


  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Labomoto</title>
</head>
<body>

<div class="parent22">
<div class="blouson"> </div>
    <div class="blousonh2"><h2>Tous nos blousons et vestes</h2><br/>
        <p>Retrouvez l'intégralité de blousons et vestes au même endroit. Blousons moto en textile, en cuir, gilet airbag, blouson airbag, veste airbag... et toutes les marques sont présentes : ALPINESTARS, DXR, BERING, IXON, REV'IT, KLIM, DAINESE, RICHA, RST, HELSTONS, FURYGAN et bien d'autres...</p>
    </div>
<div class="cardblouson"> 
<section class="products_list">
        <?php 
        //inclure la page de connexion
        include_once "base-de-donnee.php";
        //afficher la liste des produits
         $req = mysqli_query($con, "SELECT * FROM produits3");
         while($row = mysqli_fetch_assoc($req)){ 
        ?>
        <form action="" class="product">
            <div class="image_product">
                <img src="image/<?=$row['photo']?>">
            </div>
            <div class="content">
                <h4 class="nom"><?=$row['nom']?></h4>
                <h2 class="prix"><?=$row['prix']?>€</h2>
                <a href="?id=<?=$row['id']?>" class="id_product">Ajouter au panier</a>
            </div>
        </form>

        <?php } ?>
       
    </section>         
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

body1 {
    display: flex;
    flex-direction: row;
    min-height: 100vh;
    justify-content: space-between;
    /*background-color: #04202e;*/
}

.blousonh2 {
    text-align: center;
}

.blousonh2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.blousonh2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Roboto', sans-serif;
}

.products_list {
    margin: 100px auto;
    position: relative;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(170px,1fr));
    grid-gap: 25px;
}

.content {
    margin-top: 0px;
    margin-bottom: 30px;
    height: fit-content;
    text-align: center;
}

.product {
    background-color: #fff;
    width: 100%;
    box-shadow: 0 0 5px rgba(0,0,0,0.3);
    border-radius: 6px;
    overflow: hidden;
    transition: 0.5s;
    flex-direction: row;
}
.product:hover {
    transform: scale(1.1);
}
.image_product {
    height: 200px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.image_product img {
    height: 150px;
    width: 150px;
    object-fit: cover;
    padding: 20px;
}

.prix {
    margin: 15px 0;
    font-weight: 20px;
    color: #37a6ff;
}

.id_product {
    text-align: center;
    text-decoration: 0;
    background: rgb(0,212,255);
    background: linear-gradient(180deg, rgba(0,212,255,1) 0%, rgba(9,9,121,1) 58%, rgba(2,0,36,1) 100%);
    letter-spacing: 1px;
    color: #fff;
    padding: 10px  10%;
    border-radius: 6px;
    font-size: 10px;
}

</style>