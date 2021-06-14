<!DOCTYPE html>
<html lang="fr">
<html>
    <head>
        <title>categorie.php</title>
        <meta charset="UTF-8">
        <link rel='stylesheet' type="text/css" href="../css/style.css">
    </head>
    <body>
        <header><?php include ('../page/header.php'); ?></header>
        <main>
            <a href="../index.php"><button type="button">Retour à l'accueil</button></a>
            <div>
                <?php
                $db = new SQLite3('../bdd.db');
                $categorie_rech = $_GET['categorie'];
                
                
                $Categorie = $db->query("SELECT NumProd,Nom FROM Produit Where NomCategorie = '$categorie_rech'");
                
                
                echo "<div>";?>
                <fieldset>
                <legend><h1><?php echo"$categorie_rech";?> :</h1></legend><?php
                    
                while($row = $Categorie->fetchArray()){
                        
                        echo"<div class='marque_block'>";
                        
                        echo "<a href='produit.php?NuméProd={$row[NumProd]}' class='lien'>";
                        
                        echo "<center><img src='../img/produits/{$row[Nom]}.png' height=150  width=150><br>";
                        
                        echo"<div>{$row[Nom]}</div></center>";
                        
                        echo"</a>";
                    echo"</div>";}
                ?></fieldset>
            </div>
        </main>
    </body>
</html>