<?php 
   session_start();
   include_once "base-de-donnee.php";

   //supprimer les produits
   //si la variable del existe
   if(isset($_GET['del'])){
    $id_del = $_GET['del'] ;
    //suppression
    unset($_SESSION['panier'][$id_del]);
   }
?>

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

<div class="parent33">
    <div class="tableau"> 
    <a href="acceuil-clients.php" class="link">Boutique</a>
    <section>
        <table>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Action</th>
            </tr>
            <?php 
              $total = 0 ;
              // liste des produits
              //récupérer les clés du tableau session
              $ids = array_keys($_SESSION['panier']);
              //s'il n'y a aucune clé dans le tableau
              if(empty($ids)){
                echo "Votre panier est vide";
              }else {
                //si oui 
                $products = mysqli_query($con, "SELECT * FROM produits WHERE id IN (".implode(',', $ids).")");

                //lise des produit avec une boucle foreach
                foreach($products as $product):
                    //calculer le total ( prix unitaire * quantité) 
                    //et aditionner chaque résutats a chaque tour de boucle
                    $total = $total + $product['prix'] * $_SESSION['panier'][$product['id']] ;
                ?>
                <tr>
                    <td><img src="image/<?=$product['photo']?>"></td>
                    <td><?=$product['nom']?></td>
                    <td><?=$product['prix']?>€</td>
                    <td><?=$_SESSION['panier'][$product['id']] // Quantité?></td>
                    <td><a href="panier.php?del=<?=$product['id']?>"><img src="image/delete.png"></a></td>
                </tr>

            <?php endforeach ;} ?>

            <tr class="total">
                <th>Total : <?=$total?>€</th>
            </tr>
        </table>
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

.parent33 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows:1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.tableau { grid-area: 1 / 1 / 2 / 6; }

.link {
    margin: 20px;
    width: fit-content;
    position: relative;
    text-decoration: 0;
    background-color: #37a6ff;
    color: #fff;
    padding: 10px 25px;
    border-radius: 6px;
    font-size: 14px;
}

.tableau {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;

}
.tableau img {
    width: 40px;
    padding: 8px 0;
}
.tableau section {
    width: 70%;
    background-color: #fff;
    padding: 10px;
    border-radius: 6px;
}

table {
    border-collapse: collapse;
    width: 100%;
    letter-spacing: 1px;
    font-size: 13px;
}
th {
    padding: 10px 0;
    font-weight: 400;
}
td {
    border-top: 0.5px solid #999;
    text-align: center;
    color: #37a6ff;
}
tr {
    border-bottom: 0.5px solid #999;
}

.total th {
    border: 0;
    float: right;
    font-weight: 500;
    color: #37a6ff;
    padding: 10px;
}

.b4{
    border: solid 2px white;
    border-radius: 30px;
    padding: 10px;
    margin: 10px;
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    color: #fff;
    font-size: 1em;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
}

a {
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>