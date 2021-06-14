<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>inscription.php</title>
        <link rel='stylesheet' type="text/css" href="../css/style.css">
        
    </head>
    <body>
        <header>
            <?php include("../page/header.php"); ?>
        </header>
        <main>
            <a href="../index.php"><button type="button">Retour à l'accueil</button></a><br><br>
            <form action="" method="post" class="principal">
                <br>
                <fieldset><legend>Vos Informations :</legend>
                <input type="text" name="votre_nom" placeholder="Votre Nom et Prénom" required><br>
                
                <input type="text" name="Pseudo" placeholder="Votre pseudo" required><br>
                
                <input type="email" name="email" placeholder="Votre mail" required><br>
                
                <input type="password" name="password" placeholder="Votre Mot de passe" required>
                <input type="password" name="password_verif" placeholder="Votre Mot de passe" required><br>
                </fieldset><br>
                <fieldset>
                <legend>Votre Adresse Postale :</legend>
                <textarea name="adresse" placeholder="Votre Adresse içi" rows="5" required></textarea><br>
                

                <input type="number" name='code_pos' placeholder="Code Postale" required><br>
                
                <Select name='pays' required>
                    <OPTION value=''>Choisir</OPTION>
                    <OPTION value='Allemagne'>Allemagne</OPTION>
                    <OPTION value='Chine'>Chine</OPTION>
                    <OPTION value='Espagne'>Espagne</OPTION>
                    <OPTION value='États-Unis'>États-Unis</OPTION>
                    <OPTION value='France'>France</OPTION>
                    <OPTION value='Italie'>Italie</OPTION>
                    <OPTION value='Japon'>Japon</OPTION>
                    <OPTION value='Portugal'>Portugal</OPTION>
                    <OPTION value='Royaume-Uni'>Royaume-Uni</OPTION>
                    <OPTION value='Suisse'>Suisse</OPTION>
                    
                    </Select>
                </fieldset><br>
                <button type='submit' class="Ajouter">S'inscrire</button>
                <button type="reset">Recommencer</button><br>
                
            </form>
            
            
            <?php
            
            $db = new SQLite3("../bdd.db");
            
            if ((!empty($_POST['votre_nom']) && !empty($_POST['Pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_verif']) && !empty($_POST['adresse']) && !empty($_POST['code_pos']) && !empty($_POST['pays'])) && (isset($_POST['votre_nom']) && isset($_POST['Pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_verif']) && isset($_POST['adresse']) && isset($_POST['code_pos']) && isset($_POST['pays']))){
            
                
            $nom_prenom = $_POST['votre_nom'];
            $pseudo = $_POST['Pseudo'];
            $email = $_POST['email'];
            $pass_mdp = $_POST['password'];
            $pass_verif = $_POST['password_verif'];
            $date_creation = date('Y/m/d');
            $adresse_post = $_POST['adresse'];
            $code_post = $_POST['code_pos'];
            $pays_resid = $_POST['pays'];
            
                if($pass_mdp == $pass_verif){
                   
                    $db->exec("INSERT INTO InfosClient(NomClient, pseudo, AdresseMail, MDP, date_creation, Adresse, CodePostal, Pays) VALUES('$nom_prenom', '$pseudo', '$email','$pass_mdp', '$date_creation' ,'$adresse_post', '$code_post', '$pays_resid')");
                    echo'Inscription réussi!';
                    
                    
                    
                }
                else{
                    echo'Les deux mots de passes sont différents. Veuillez Recommencer!';
                }header('Refresh:2;url=connexion.php');
                }
            
            ?>
                
        </main>
    </body>
</html>