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

<div class="parent24">
<div class="choix2"> </div>
<div class="photo2"> <img src="image/blouson1.jpg" alt="photo de gants bering" width="500px" height="500px" ></div>
<div class="description2"><h2>BLOUSON BERING HUNT-R - NOIR / BLANC</h2><br/><p>199€</p><br/><button class="b3">Ajoutez au panier</button> </div>
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

.parent24 {
display: grid;
grid-template-columns: repeat(5, 1fr);
grid-template-rows: 1fr;
grid-column-gap: 0px;
grid-row-gap: 0px;
}

.choix2 { grid-area: 1 / 1 / 2 / 6; }
.photo2 { grid-area: 1 / 1 / 2 / 3; }
.description2 { grid-area: 1 / 3 / 2 / 6; }

.photo2 {
    display: flex;
    justify-content: center;
    align-items: center;
}

.description2 {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.description2 h2 {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
}

.description2 p {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 40px;
    font-family: 'Roboto', sans-serif;
    color: red;
}

.b3{
    border: solid 2px white;
    border-radius: 30px;
    padding: 10px;
    margin: 10px;
    background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    color: #fff;
    font-size: 2em;
    cursor: pointer;
}
</style>