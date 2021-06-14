
<html>
    <head>
        <title>produit.php</title>
        <link rel='stylesheet' type="text/css" href="../css/style.css">
    </head>
    <body>
        <header><?php include ('../page/header.php'); ?></header>
        <main>
            <div>
                <a href="../index.php"><button type="button">Retour à l'accueil</button></a>
                <?php
                $db = new SQLite3('../bdd.db');
                $produit_rech = $_GET['NuméProd'];
                $Produit = $db->query("SELECT Nom, Prix FROM Produit Where NumProd = '$produit_rech'");                
                echo "<div>";?>
                <fieldset>
                <legend><h1>Produit :</h1></legend><?php 
                while($row = $Produit->fetchArray()){
                        echo"<div class='produit'>";
                        echo "<center><img src='../img/produits/{$row[Nom]}.png' height=400  width=400><br>";
                        echo"<div>{$row[Nom]} - {$row[Prix]}€</div></center>";
                    echo"</div>";
                }
                echo"</br><a href='connexion.php'><center><button type='button'>Connectez-vous pour ajouter au panier</button></center></a>";
                ?>
                
                </fieldset>
                
            </div>
        </main>

    </body>
</html>