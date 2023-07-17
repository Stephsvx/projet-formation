<?php include 'connexion-utilisateurs.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Labomoto</title>
</head>
<body>
    
<div class="container">
    <form action="connexion-utilisateurs.php" method="POST">
        <p>Connexion</p>

            <input type="text" id="email" name="email" placeholder="email" required><br>

            <input type="password" id="motdepasse" name="motdepasse" placeholder="motdepasse" required><br>

            <input type="submit" name="submit" value="Connexion"><br>

            <a href="inscription.php">Pas encore client inscrivez-vous</a>
    </form>
</div>

</body>
</html>

<style>

* {
	margin: 0;
	padding: 0;
	outline: none;
}

body {
	background-image: url(image/Circuit-moto.jpg);
	background-size: cover;
	height: 100vh;
	font-family: 'Roboto', sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
}
  
.container {
	position: relative;
}

form {
	background: transparent;
	padding: 3rem;
	height: 500px;
	border-radius: 20px;
	border-left: 1px solid rgba(255, 255, 255, .3);
	border-top: 1px solid rgba(255, 255, 255, .3);
	backdrop-filter: blur(10px);
	-webkit-backdrop-filter: blur(10px);
	-moz-backdrop-filter: blur(10px);
	box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
	text-align: center;
}

p {
	color: white;
	font-weight: 500;
	opacity: .7;
	font-size: 1.4rem;
	margin-bottom: 60px;
	text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
}
	
a {
	text-decoration: none;
	color: white;
	font-size: 12px;
}
  
a:hover {
	text-shadow: 2px 2px 6px #00000040;
}
  
a:active {
	text-shadow: none;
}

input {
	background: white;
	border: none;
	border-left: 1px solid rgba(255, 255, 255, .3);
	border-top: 1px solid rgba(255, 255, 255, .3);
	padding: 1rem;
	width: 200px;
	border-radius: 50px;
	backdrop-filter: blur(5px);
	-webkit-backdrop-filter: blur(5px);
	-moz-backdrop-filter: blur(5px);
	box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
	color: black;
	font-weight: 500;
	text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
	transition: all .3s;
	margin-bottom: 2em;
	text-align: center;
}

input:hover,
input[type="email"]:focus,
input[type="password"]:focus{
  background: rgba(255,255,255,0.1);
  box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
}
    
input[type="button"] {
  margin-top: 10px;
  width: 150px;
  font-size: 1rem;
  cursor: pointer;
}

::placeholder {
  color: black;
}

  input[type="submit"] {
	background: rgb(2,0,36);
    background: linear-gradient(180deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
    color: white;
    border: 1px solid #adf0d1;
    font-size: 16px;
    font-weight: bold;
    padding: 16px 32px;
    margin-top: 24px;
    letter-spacing: 1px;
    border-radius: 50px;
    border-color: rgba(0, 32, 63, .45);
    transition: .2s ease-in;
}

input[type="submit"]:hover {
    cursor: pointer;
    background-color: #00203f;
    color: #adf0d1;
}

</style>