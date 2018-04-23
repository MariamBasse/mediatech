<?php 
session_start();

if(isset($_POST['forminscription'])){
    $db=mysqli_connect('localhost', 'mayya', 'auf', 'binta') ;

    $username = ($_POST['username']);
    $password     = ($_POST['password']);
    $password2    = ($_POST['mdp1']);

    if($password==$password2){
        $sql="INSERT INTO baba(nom_utilisateur, mot_de_passe) VALUES('$username', '$password')";
        mysqli_query($db, $sql);
          header('Location: connexion.php');

    }else{
        echo "bad";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Chanel </title>
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Stylesheet
    ================================================== -->
  <link rel="stylesheet" type="text/css"  href="style.css">
  <link rel="stylesheet" type="text/css" href="mayya.css">


    </head>
  <body >
    <div id="conteneur">
    <div id="menu">
      <dl>
        <dt><a href="index.php" target="_blank">Acceuil</a></dt>
      </dl>
      <dl>
        <dt> <a href="forum.php" target="_blank">Avis</a></dt>
      </dl>

      <dl>
          <dt><a href="connexion.php" target="_blank">connexion</a></dt>
      </dl>

  </div>
  </div>

  <div> 
  <section>
  <div> 
      <marquee>       <h1 id="titre">Bienvenue sur le site my chanel</h1>  </marquee>

       <div id="container">
            <!-- zone d'inscription -->
            
              <form  method="POST" action="">
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <label><b>Confirmer le mot de passe</b></label>
                <input type="password" placeholder="confirmer le mot de passe" name="mdp1" required>

                <input type="submit" value='incrivez vouz' name="forminscription">
              </form>   

  </body>
</html>






