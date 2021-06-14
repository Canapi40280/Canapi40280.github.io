<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title>connexion.php</title>
      <link rel='stylesheet' type="text/css" href="../css/style.css">
   </head>
   <body>
      <header>
         <?php include("../page/header.php"); ?>
      </header>
      <main>
      <a href="../index.php"><button type="button">Retour à l'accueil</button></a><br><br>
      <form action="connexion.php" method='post' class="principal">
         <br>
         <fieldset>
            <legend>Vos Informations :</legend>
            <br>
            <table>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail"/>
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
                  </td>
               </tr>
            </table>
         </fieldset>
         <br>
         <tr>
            <td></td>
            <td align="center">
               <br/>
               <input type="submit" value="Se connecter"/>
            <td/>
            <td align="left">
               <br/>
               <p>Pas encore inscrit ?<a href="inscription.php"> Je m'inscrits</a></p>
            </td>
         </tr>
         <br>
      </form>
   </body>
</html>
