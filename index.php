<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>index.php</title>
    </head>
    <body>
        <header>
            <?php include("page/header.php");?>
        </header>
        <?php
	$db = new SQLite3("bdd.db");
	echo"<div class='principal'>";
	?>
	<?php
	echo"<fieldset>";
	$Categories = $db->query("SELECT DISTINCT NomCategorie FROM Produit");
	echo"<div class='produit'>";
		            while($row = $Categories->fetchArray()){
		                echo "<a href='modules/categorie.php?categorie={$row[NomCategorie]}' class='lien'>";
		                echo "<center><img src='img/categories/{$row[NomCategorie]}.png' height=150  width=150 class='divprod'><br>";
		                echo"<div>{$row[NomCategorie]}</div></center>";
		                echo"</a>";}
	echo"</div>";
	echo"</fieldset>";
	echo"<br>";
 	echo "<center><img src='img/promo.gif'><br>";
	?>
    </body>
</html>
