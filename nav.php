

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="parent2">
      <div class="nav"> </div>
      <div class="route"> esapce route</div>
      <div class="cross"> espace cross</div>
      <div class="circuit"> espace circuit</div>
      <div class="compte"> compte</div>
      <div class="panier"> panier</div>
</div>

</body>
</html>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
}

.parent2 {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-template-rows: 1fr;
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    }
    
.nav { grid-area: 1 / 1 / 6 / 6; }
.route { grid-area: 1 / 1 / 2 / 2; }
.cross { grid-area: 1 / 2 / 2 / 3; }
.circuit { grid-area: 1 / 3 / 2 / 4; }
.compte { grid-area: 1 / 4 / 2 / 5; }
.panier { grid-area: 1 / 5 / 2 / 6; }

.nav {
    height: 50px;
    display: flex;
    background: rgb(0,212,255);
    background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(9,9,121,1) 58%, rgba(2,0,36,1) 100%);
}

.route {
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 2px black;
}

.cross {
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 2px black;
}

.circuit {
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 2px black;
    color: #fff;
}

.compte {
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 2px black;
    color: #fff;
}

.panier {
    display: flex;
    justify-content: center;
    align-items: center;
    border: solid 2px black;
    color: #fff;
}

</style>